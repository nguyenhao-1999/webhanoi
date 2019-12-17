<?php 
$contact=loadModel('contact');
if(isset($_POST["TRALOI"]))
{
	$id=$_POST['id'];
	$row=$contact->contact_rowid($id);
// file 03-gmail.php

//Nhúng thư viện phpmailer
	require_once('../system/phpmailer/class.phpmailer.php');

//Khởi tạo đối tượng
	$mail = new PHPMailer();

/*=====================================
 * THIET LAP THONG TIN GUI MAIL
 *=====================================*/

$mail->IsSMTP(); // Gọi đến class xử lý SMTP
$mail->Host       = "smtp.gmail.com"; // tên SMTP server
$mail->SMTPDebug  = 1;                    // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
$mail->SMTPSecure = "ssl";
$mail->Host       = "smtp.gmail.com";     // Thiết lập thông tin của SMPT
$mail->Port       = 465;                     // Thiết lập cổng gửi email của máy
$mail->Username   = "nh58505@gmail.com"; // SMTP account username
$mail->Password   = "01695125265";            // SMTP account password

//Thiet lap thong tin nguoi gui va email nguoi gui
$mail->SetFrom('nh58505@gmail.com','Delta Shoes');

//Thiết lập thông tin người nhận
$mail->AddAddress($row['contact_email'], $row['contact_fullname']);
$mail->AddAddress($row['contact_email'], $row['contact_fullname']);

//Thiết lập email nhận email hồi đáp
//nếu người nhận nhấn nút Reply
$mail->AddReplyTo($row['contact_email'],$row['contact_fullname']);

/*=====================================
 * THIET LAP NOI DUNG EMAIL
 *=====================================*/

//Thiết lập tiêu đề
$mail->Subject    = "Trả lời:".$row['contact_title'];

//Thiết lập định dạng font chữ
$mail->CharSet = "utf-8";

//Thiết lập nội dung chính của email
$body = $_POST['content'];
$mail->Body = $body;

if(!$mail->Send()) {
	set_flash('thongbao',['type'=>'danger','msg'=>'Trả lời liên hệ không thành công']);
	redirect('index.php?option=contact&cat=rely');
} else 
{
	$data= array(
		'contact_status'=>2,
		'contact_updatedat'=>date('Y-m-d H:i:s'),
		'contact_updatedby'=>$_SESSION['user_id']

	);
	$contact->contact_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Trả lời liên hệ thành công']);
	redirect('index.php?option=contact');
}
else
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Trả lời liên hệ không thành công']);
	redirect('index.php?option=contact&cat=rely');
}

?>