<?php 


require_once('phpmailer/class.phpmailer.php');

// khởi tao function 

function sendmail( $email = "", $name = "", $title = "", $detail = "")
{
		//Khởi tạo đối tượng
	$mail = new PHPMailer();

    $mail->IsSMTP(); // Gọi đến class xử lý SMTP
    $mail->Host       = "smtp.gmail.com"; // tên SMTP server
    $mail->SMTPDebug  = 1;                    // enables SMTP debug information (for testing)
                                               // 1 = errors and messages
                                               // 2 = messages only
    $mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
    $mail->SMTPSecure = "ssl";
    $mail->Host       = "smtp.gmail.com";     // Thiết lập thông tin của SMPT
    $mail->Port       = 465;                     // Thiết lập cổng gửi email của máy
    $mail->Username   = "bepquangvinh.connect@gmail.com"; // SMTP account username
    $mail->Password   = "Bepquangvinh123";            // SMTP account password

    //Thiet lap thong tin nguoi gui va email nguoi gui
    $mail->SetFrom($email,'Bếp Quang Vinh - Cổng bán hàng Online');

    //Thiết lập thông tin người nhận
    $mail->AddAddress($email, $name);
    $mail->AddAddress($email, $name);

    //Thiết lập email nhận email hồi đáp
    //nếu người nhận nhấn nút Reply
    $mail->AddReplyTo($email, $name);

    /*=====================================
     * THIET LAP NOI DUNG EMAIL
     *=====================================*/

    //Thiết lập tiêu đề
    $mail->Subject    = "TRẢ LỜI : ".$title;

    //Thiết lập định dạng font chữ
    $mail->CharSet = "utf-8";

    //Thiết lập nội dung chính của email
    $body = $detail;
    $mail->Body = $body;
    $mail->IsHTML(true);   
    if($mail->Send()){
    	echo "Gửi thàn công";
    }
}