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
      $err['success'] = false;
  }elseif ($contact->contact_list($email) !=0) {
   $err['msg'] = 'Email đã tồn tại';
   $err['success'] = false;
}
elseif(!filter_var($_POST['input'],FILTER_VALIDATE_EMAIL))
{
    $err['msg'] = 'Email không chính xác';
    $err['success'] = false;
}
else
{
    $data =array(
        'contact_fullname'=>"Không xác định",
        'contact_email'=>$_POST['input'],
        'contact_phone'=>"Không xác định",
        'contact_gender'=>"Không xác định",
        'contact_createdat'=>date('Y-m-d H:i:s'),
        'contact_updatedat'=>date('Y-m-d H:i:s'),
        'contact_updatedby'=>1,
        'contact_status'=>1
    );
    $contact->contact_insert($data);
    $check  = sendmail( 'phuong97nhp@gmail.com', "Bếp Quang Vinh", $title = "Gửi thông tin email", $detail = '<p style="text-align:center;">Bạn vừa nhận được 1 email mới từ khách hàng của mình. </p><p style="text-align:center;">Nhấn vào đây để trả lời email :<a href="mailto:'.$email.'">'.$email.'</a></p>');

    if ( $check) {
        $err['msg'] = 'Gửi thành công';
        $err['success'] = true;
    }


}
echo json_encode($err,true);
die();
}
?>
