<?php 
require_once('../system/phpmailer/class.phpmailer.php');
$contact = loadModel('contact');
$id = $_REQUEST['id'];
$row = $contact->contact_rowid($id);
$title="Trả lời liên hệ";
$detail = "";

$data_arr = ['contact_status' => 2,
'contact_updatedat' => date('Y-m-d H:i:s'),
'contact_updatedby' => $_SESSION['user_id']];
// TRẢ LỜI LIÊN HỆ

//Nhúng thư viện phpmailer

//Khởi tạo đối tượng
$mail = new PHPMailer();


if(isset($_POST['TRALOI']))
{
  $detail = $_POST['detail'];

  if (empty($detail)) 
  {
    set_flash('thongbao','Bạn cần nhập nội dung trả lời.');
  }else{

    $mail->IsSMTP(); // Gọi đến class xử lý SMTP
    $mail->Host       = "smtp.gmail.com"; // tên SMTP server
    $mail->SMTPDebug  = 1;                    // enables SMTP debug information (for testing)
                                               // 1 = errors and messages
                                               // 2 = messages only
    $mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
    $mail->SMTPSecure = "ssl";
    $mail->Host       = "smtp.gmail.com";     // Thiết lập thông tin của SMPT
    $mail->Port       = 465;                     // Thiết lập cổng gửi email của máy
    $mail->Username   = "boycodonsitinh97@gmail.com"; // SMTP account username
    $mail->Password   = "Aa140179193";            // SMTP account password

    //Thiet lap thong tin nguoi gui va email nguoi gui
    $mail->SetFrom($row['contact_email'],'BoShop - Cổng bán hàng Online');

    //Thiết lập thông tin người nhận
    $mail->AddAddress($row['contact_email'], $row['contact_fullname']);
    $mail->AddAddress($row['contact_email'], $row['contact_fullname']);

    //Thiết lập email nhận email hồi đáp
    //nếu người nhận nhấn nút Reply
    $mail->AddReplyTo($row['contact_email'], $row['contact_fullname']);

    /*=====================================
     * THIET LAP NOI DUNG EMAIL
     *=====================================*/

    //Thiết lập tiêu đề
    $mail->Subject    = "TRẢ LỜI : ".$row['contact_title'];

    //Thiết lập định dạng font chữ
    $mail->CharSet = "utf-8";

    //Thiết lập nội dung chính của email
    $body = $detail;
    $mail->Body = $body;
    $mail->IsHTML(true);   

    if(!$mail->Send()) {
      set_flash('thongbao', "Trả lời bị lỗi: " . $mail->ErrorInfo);
    } else {
      //$check_sucssec = ;
      if ($contact->contact_update($data_arr, $id) == TRUE) {
        set_flash('thongbao', ['type'=>'success','msg'=>'Đã gửi email trả lời thành công !']);
        $detail = "";
      }else{
        set_flash('thongbao', ['type'=>'success','msg'=>'Không thể gửi email này đi !']);
      }
    }
  }
}

?>

<?php require_once 'views/header.php'; ?>
<?php require_once('views/message.php'); ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="" method="POST">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-success" name="TRALOI" id="TRALOI" type="submit"><i class="fas fa-save"></i> Trả lời</button>
            <a href="index.php?option=contact" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
        <div class="row">
          <div class="col-md-9">
            <fieldset class="form-group">
              <h3 class="text-center">Trả lời liên hệ với : <span class="text-info"><?php if($row['contact_fullname'])  echo $row['contact_fullname']; ?></span></h3>
            </fieldset>
            <fieldset class="form-group">
              <label for="chitietsp">Nội dung trả lời</label>
              <textarea name="detail" class="form-control" id="chitietsp" required rows="12"><?php if($detail) echo $detail; ?></textarea>
            </fieldset>
          </div>
          <div class="col-md-3">
            <fieldset class="form-group">
              <label for="tensp">Tên người gửi</label>
              <input type="text" class="form-control" id="tensp" value="<?php if($row['contact_fullname'])  echo $row['contact_fullname']; ?>" readonly required placeholder="Tên sản phẩm">
            </fieldset>
            <fieldset class="form-group">
              <label for="tensp">Gửi email đến</label>
              <input type="text" class="form-control" id="tensp" value="<?php if($row['contact_email'])  echo $row['contact_email']; ?>" readonly required placeholder="Tên sản phẩm">
            </fieldset>
            <fieldset class="form-group">
              <label for="tensp">Số điện thoại</label>
              <input type="text" class="form-control" id="tensp" value="<?php if($row['contact_phone'])  echo $row['contact_phone']; ?>" readonly required placeholder="Tên sản phẩm">
            </fieldset>
            <fieldset class="form-group">
              <label for="tensp">Tiêu đề trả lời</label>
              <input type="text" class="form-control" id="tensp" value="<?php if($row['contact_title']) echo $row['contact_title']; ?>" readonly required placeholder="Tên sản phẩm">
            </fieldset>
            <fieldset class="form-group">
              <label for="tensp">Nội dung liên hệ</label>
              <textarea class="form-control" readonly required rows="5"><?php if($row['contact_detail']) echo $row['contact_detail']; ?></textarea>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</section>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );</script>
  <?php require_once 'views/footer.php'; ?>