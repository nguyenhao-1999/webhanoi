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
    $mail->SetFrom($email,'Bếp Quang Vinh - Cổng thông tin Online');

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
    $mail->Subject    = "EMAIL THỪ BẾP QUANG VINH : ".$title;

    //Thiết lập định dạng font chữ
    $mail->CharSet = "utf-8";


    $details = '<!DOCTYPE html><html><head><title>Thông báo gửi đến bạn</title><style>body{margin:0}#mainSendMail{margin:0 auto;border:1px #ddd solid;width:600px;border-radius:9px;padding:10px}.content-sendmail{border-top:1px #ddd solid;border-bottom:1px #ddd solid;background-color:#fff;min-height:150px;margin-bottom:10px;padding-top: 5px;padding-bottom: 5px;}.title-sendmail{text-align:center;color:#fff;margin-top:5px;margin-bottom:10px;padding:5px;background-color:#ea1c24}.title-sendmail p{text-align:center;color:#fff;font-size:15px;margin-top:5px;margin-bottom:10px;padding:5px;background-color:#ea1c24}.address-sendmail{padding:5px;text-align:center;color:#fff;background-color:#1a1a1a}</style></head><body> <section id="mainSendMail"><h1 class="title-sendmail">BếpQuangVinh Thông tin đến cho bạn<p>('.$title.')</p></h1><div class="content-sendmail"> '.$detail.'</div><div class="address-sendmail"><h3>Thông tin liên hệ</h3><p><span>Địa chỉ: </span>Số 28 Nguyễn Văn Trỗi, Phương Liệt, Thanh Xuân Hà Nội</p><p><span>Điện Thoại: </span>04 3864.6157 - 04 3662.5489</p><p><span>HOTLINE: </span>0932.395.177</p><p style="color: #fff;"><span>Email: </span>bepquangvinh@gmail.com</p></div> </section></body></html>';
    
    //Thiết lập nội dung chính của email
    $body = $details;
    $mail->Body = $body;
    $mail->IsHTML(true);   
    if($mail->Send()){
    	return true;
    }
}