<?php 
$email=$_POST['input'];
if(isset($email))
{
    include('models/Contact.php');
    if($email=="")
    {
    	$err['msg'] = 'Cần nhập vào thông tin';
		$err['success'] = false;
    }elseif ($contact->contact_list($email)!=0) {
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
        $err['msg'] = 'Gửi email thành công';
		$err['success'] = true;
    }
    echo json_encode($err,true);
    die();
}
require_once('views/footer.php');
 ?>