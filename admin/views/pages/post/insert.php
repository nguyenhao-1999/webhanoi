<?php 
$topic=loadModel('topic');
$listpost=$topic->topic_list('index');
$html_topid='';
foreach($listpost as $cat)
{
  $html_topid.="<option value='".$cat['topic_id']."'>".$cat['topic_name']."</option>";
}
$title="Thêm bài viết";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=post&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="THEM" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=post" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
          <?php require_once('views/message.php'); ?>
        <div class="row">
          <div class="col-md-9">
            <fieldset class="form-group">
              <label for="tensp">Tiêu đề bài viết</label>
              <input type="text" name="title" class="form-control" id="tensp" required placeholder="Tiêu đề bài viết">
            </fieldset>
            <fieldset class="form-group">
              <label for="chitietbv">Chi tiết bài viết</label>
              <textarea name="detail" class="form-control" id="chitietbv" required rows="7"></textarea>
            </fieldset>
            <fieldset class="form-group">
              <label for="mota">Mô tả</label>
              <textarea name="metadesc" class="form-control" id="mota" rows="2"></textarea>
            </fieldset>
            <fieldset class="form-group">
              <label for="tukhoa">Từ khóa</label>
              <textarea name="metakey" class="form-control" id="tukhoa"rows="2"></textarea>
            </fieldset>

          </div>
          <div class="col-md-3">
            <fieldset class="form-group">
              <label for="loaisp">Chủ đề bài viết</label>
              <select name="topid" class="form-control" required id="loaisp">
                <option value="">[--Chọn chủ đề bài viết--]</option>
                <?php echo $html_topid; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="img">Hình đại diện</label>
                <div class="input-group mb-3">
                  <input type="hidden" id="ckfinder-input-1" name="img" class="form-control" required aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button type="button" id="ckfinder-popup-1">Chọn hình</button>
                </div>
              </div>
              <img src="../public/images/noImg.jpg" alt="Chọn hình"  class="mb-2"id="uml_img_test" style="width: 150px;height: 150px; border: 1px #eee solid;">
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
     CKEDITOR.replace('chitietbv');
  } );</script>
   <script>
  var button1 = document.getElementById( 'ckfinder-popup-1' );

  button1.onclick = function() {
    selectFileWithCKFinder( 'ckfinder-input-1' );
  };

  function selectFileWithCKFinder( elementId ) {
  CKFinder.modal( {
    chooseFiles: true,
    width: 800,
    height: 600,
    onInit: function( finder ) {
      finder.on( 'files:choose', function( evt ) {
        var file = evt.data.files.first();
        var output = document.getElementById( elementId );
        $('#uml_img_test').attr('src', file.getUrl() );
        $('#ckfinder-input-1').val(file.getUrl());
      } );

      finder.on( 'file:choose:resizedImage', function( evt ) {
        var output = document.getElementById( elementId );
        output.value = evt.data.resizedUrl;
      } );
    }
  } );
}
</script>
  <?php require_once 'views/footer.php'; ?>