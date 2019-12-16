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
              <select name="catid" class="form-control" required id="loaisp">
                <option value="">[--Chọn chủ đề bài viết--]</option>
                <?php echo $html_topid; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="hinh">Hình đại diện</label>
              <input type="file" name="img" class="form-control" required id="hinh">
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
  <?php require_once 'views/footer.php'; ?>