<?php 
$slider=loadModel('slider');
$id=$_REQUEST['id'];
$row=$slider->slider_rowid($id);
$listslider=$slider->slider_list();
if($row==null)
{
  set_flash('thongbao','Mã slider không tồn tại.');
  redirect('index.php?option=slider');
}
$html_position='';
foreach($listslider as $cat)
{
  if($cat['slider_id']==$row['slider_id'])
  {
    $html_position.="<option selected value='".$cat['slider_position']."'>".$cat['slider_position']."</option>";
  }
  else
  {
   $html_position.="<option value='".$cat['slider_position']."'>".$cat['slider_position']."</option>";
 }
}
$title="Sửa silder";
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
            <button class="btn btn-sm btn-success" name="CAPNHAT" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=slider" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
        <?php require_once('views/message.php');?>
        <div class="row">
           <div class="col-md-12">
            <input type="hidden" name="id" value="<?php echo $row['slider_id'];?>">
            <fieldset class="form-group">
              <label for="tenslider">Tên slider</label>
              <input type="text" name="name" class="form-control" id="tenslider" required placeholder="Tên slider" value="<?php echo $row['slider_name'] ?>">
            </fieldset>
            <fieldset class="form-group">
              <label for="lienket">Liên kết</label>
              <input type="text" name="link" class="form-control" id="lk" required placeholder="Liên kết" value="<?php echo $row['slider_link'] ?>">
            </fieldset>
             <fieldset class="form-group">
              <label for="hinh">Hình ảnh</label>
              <input type="file" name="img" class="form-control" id="hinh">
            </fieldset>
            <fieldset class="form-group">
              <label for="loaisp">Vị trí</label>
              <select name="position" class="form-control" required id="loaisp">
                <option value="">[--Chọn vị trí--]</option>
                <?php echo $html_position; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="trangthai">Trạng thái</label>
              <select name="status" class="form-control" id="trangthai">
                <option value="1" <?php if($row['post_status']==1) {echo 'selected';}  ?>>Xuất bản</option>
                <option value="2" <?php if($row['post_status']==2) {echo 'selected';}  ?>> Chưa xuất bản</option>
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
     CKEDITOR.replace('chitietsp');
  } );</script>
  <?php require_once 'views/footer.php'; ?>