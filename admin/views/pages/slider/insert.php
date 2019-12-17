<?php 
$slider=loadModel('slider');
$list=$slider->slider_list('index');
$html_position='';
$title="Thêm sản phẩm";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=slider&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="THEM" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=slider" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
          <?php require_once('views/message.php'); ?>
        <div class="row">
          <div class="col-md-12">
            <fieldset class="form-group">
              <label for="tenslider">Tên slider</label>
              <input type="text" name="name" class="form-control" id="tenslider" required placeholder="Tên slider">
            </fieldset>
            <fieldset class="form-group">
              <label for="lienket">Liên kết</label>
              <input type="text" name="link" class="form-control" id="lk" required placeholder="Liên kết">
            </fieldset>
             <fieldset class="form-group">
              <label for="hinh">Hình ảnh</label>
              <input type="file" name="img" class="form-control" required id="hinh">
            </fieldset>
            <fieldset class="form-group">
              <label for="vt">Vị trí</label>
              <select name="position" class="form-control" required id="vt">
                <option value="">[--Chọn vị trí--]</option>
                <option value="slideshow">slideshow</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="trangthai">Trạng thái</label>
              <select name="status" class="form-control" id="trangthai">
                <option value="1">Xuất bản</option>
                <option value="2"> Chưa xuất bản</option>
              </select>
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
  CKEDITOR.replace('chitietsp');
</script>

  <?php require_once 'views/footer.php'; ?>