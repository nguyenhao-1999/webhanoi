<?php 
require_once("../Config.php");
require_once('../system/Database.php');
require_once('../system/sendmail.php');
function loadModelAjax($name)
{
    $name=ucfirst(strtolower($name));//đầu là chữ hoa mà sau là chữ thường
    $pathModel='../models/'.$name.'.php';
    if (file_exists($pathModel)) 
    {
        include($pathModel);
        $modelclass=new $name;
        return $modelclass;
    }       
    else
    {
        return NULL;
    }
}   
$contact= loadModelAjax('contact');
$option= loadModelAjax('option');
$email=$_POST['input'];
if(isset($email))
{
    if($email=="")
    {
    	$err['msg'] = 'Cần nhập vào thông tin';
        $err['el'] = 'EmailRegister';
        $err['success'] = false;
    }elseif ($contact->contact_list($email) !=0) {
        $err['msg'] = 'Email đã tồn tại';
        $err['el'] = 'EmailRegister';
        $err['success'] = false;
    }
    elseif(!filter_var($_POST['input'],FILTER_VALIDATE_EMAIL))
    {
        $err['msg'] = 'Email không chính xác';
        $err['el'] = 'EmailRegister';
        $err['success'] = false;
    }
    else
    {

    // Lưu về cơ sở dữ liệu
    $data =array(
        'contact_fullname'=>"Không xác định",
        'contact_email'=> $email,
        'contact_phone'=>"Không xác định",
        'contact_gender'=>"Không xác định",
        'contact_createdat'=>date('Y-m-d H:i:s'),
        'contact_updatedat'=>date('Y-m-d H:i:s'),
        'contact_updatedby'=>1,
        'contact_status'=>1
    );
    $contact->contact_insert($data);

    // Lấy ra số lượng thông báo
    $arr_notification = ['option_name' => 'notification', 'menu_status' => 1];
    $notification = $option->get_inforwebsite($arr_notification);
    $number_of_name = (int)$notification['option_value'];

    // lưu về thông báo (Thây đổi số lương thông báo cần xữ lý)
    $data_option =array(
        'option_name'=> 'notification',// khai báo thông báo là notification
        'option_value'=> $number_of_name, // số lượng thông báo được tính vào
        'option_createdat'=>date('Y-m-d H:i:s'),
        'option_updatedat'=>date('Y-m-d H:i:s'),
        'option_updatedby'=>1,
        'option_status'=>1
    );
    $option->option_update($data_option, 'notification');

    // thêm mới thông báo

    $data_option_of =array(
        'option_name'=> 'notification_of',// khai báo thông báo là notification_of
        'option_value'=> 'Bạn có nhận được email: '.$email, // Hiển thị ra thông báo gì 
        'option_createdat'=> date('Y-m-d H:i:s'),
        'option_updatedat'=> date('Y-m-d H:i:s'),
        'option_updatedby'=> 1,
        'option_status'=> 1
    );
    $option->option_insert($data_option_of);

    // Lấy ra thông tin email chính chủ
    $arr_option = ['option_name' => 'email','menu_status' => 1];
    $sendmail = $option->get_inforwebsite($arr_option);

    // gửi mail và kiểm tra có thành công hay không
    $check  = sendmail( $sendmail['option_value'], "Bếp Quang Vinh", $title = "Gửi thông tin email", $detail = '<p style="text-align:center;">Bạn vừa nhận được 1 email mới từ khách hàng của mình. </p><p style="text-align:center;">Nhấn vào đây để trả lời email :<a href="mailto:'.$email.'">'.$email.'</a></p>');

    if ( $check) {
        $err['msg'] =  "Bạn đã gửi thành công email.";
        $err['el'] = 'EmailRegister';
        $err['success'] = true;
    }

}
    echo json_encode($err,true);
    die();
}
?>
