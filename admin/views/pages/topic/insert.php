<?php 
$topic=loadModel('topic');
$listtopic=$topic->topic_list('index');
$html_topid='';
$html_order='';
foreach($listtopic as $cat)
{
  $html_topid.="<option value='".$cat['topic_id']."'>".$cat['topic_name']."</option>";
  $html_order.="<option value='".$cat['topic_order']."'>".$cat['topic_name']."</option>";
}
$title="Thêm chủ đề";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=topic&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="THEM" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=topic" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
        <?php require_once('views/message.php'); ?>
        <div class="row">
          <div class="col-md-9">
            <fieldset class="form-group">
              <label for="tencd">Tên chủ đề</label>
              <input type="text" name="name" class="form-control" id="tencd" required placeholder="Tên chủ đề">
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
              <label for="loaisp">Chủ đề cha</label>
              <select name="parentid" class="form-control" id="loaisp">
                <option value="">[--Chọn chủ đề cha--]</option>
                <?php echo $html_topid; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="loaisp">Sắp xếp(đứng sau)</label>
              <select name="order" class="form-control" required id="loaisp">
                <option value="">[--Chọn vị trí sắp xếp--]</option>
                <?php echo $html_order; ?>
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
    CKEDITOR.replace('chitietbv');
  } );</script>
  <?php require_once 'views/footer.php'; ?>