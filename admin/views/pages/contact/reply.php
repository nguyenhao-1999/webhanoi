<?php 
$id=$_REQUEST['id'];
$contact=loadModel('contact');
$row=$contact->contact_rowid($id);
$title="Trả lời liên hệ";
?>
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=contact&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
          	<button class="btn btn-sm btn-success" name="TRALOI" type="submit"><i class="fas fa-save"></i>Trả lời</button>
            <a href="index.php?option=contact" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
          <?php require_once('views/message.php'); ?>
        <div class="row">
          <div class="col-md-9">
            <input type="hidden" name="id" value="<?php echo $row['contact_id']; ?>">
            <div class="text-center"><h3>Gửi đến mail: <?php echo $row['contact_email']; ?></h3></div>
            <fieldset class="form-group">
              <label for="noidung">Nội dung</label>
              <textarea name="content" class="form-control" id="noidung" required rows="7"></textarea>
            </fieldset>
          </div>
          <div class="col-md-3">
          <fieldset class="form-group">
            <label>Họ và tên</label>
            <input name="fullname" class="form-control" disabled placeholder="Họ và tên" value="<?php echo $row['contact_fullname']; ?>">
          </fieldset>
          <fieldset class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" disabled placeholder="Email" value="<?php echo $row['contact_email']; ?>">
          </fieldset>
          <fieldset class="form-group">
            <label>Số điện thoại</label>
            <input name="phone" class="form-control" disabled placeholder="Số điện thoại" value="<?php echo $row['contact_phone']; ?>">
          </fieldset>
          <fieldset class="form-group">
            <label>Tiêu đề liên hệ</label>
            <input name="title"class="form-control" disabled placeholder="Tiêu đề liên hệ" value="<?php echo $row['contact_title']; ?>">
          </fieldset>
          <fieldset class="form-group">
            <label>Nội dung liên hệ</label>
            <textarea rows="3" class="form-control" disabled><?php echo $row['contact_detail']; ?></textarea>
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
  } );
</script>

  <?php require_once 'views/footer.php'; ?>