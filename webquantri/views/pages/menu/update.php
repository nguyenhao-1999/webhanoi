<?php 
$id=$_REQUEST['id'];
$menu=loadModel('menu');
$row=$menu->menu_rowid($id);
$list=$menu->menu_list('index');
if($row==null)
{
  set_flash('thongbao',['type'=>'danger','msg'=>'Mã menu không tồn tại']);
  redirect('index.php?option=menu');
}
$html_parentid='';
$html_order='';
foreach($list as $cat)
{
  if($cat['menu_id']==$row['menu_parentid'])
  {
    $html_parentid.="<option selected value='".$cat['menu_id']."'>".$cat['menu_name']."</option>";
  }
  else
  {
   $html_parentid.="<option value='".$cat['menu_id']."'>".$cat['menu_name']."</option>";

 }
 if($cat['menu_id']==$row['menu_order'])
 {
  $html_order.="<option selected value='".$cat['menu_order']."'>".$cat['menu_name']."</option>";
}
else
{
 $html_order.="<option value='".$cat['menu_order']."'>".$cat['menu_name']."</option>";
}
}
$title="Sửa menu";
?> 
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=menu&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="CAPNHAT" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=menu" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
        <?php require_once('views/message.php');?>
        <div class="row">
          <div class="col-md-9">
           <input type="hidden" name="id" value="<?php echo $row['menu_id'];?>">
           <fieldset class="form-group">
            <label for="tensp">Tên menu</label>
            <?php if($row['menu_type']=='custom'): ?>
              <input type="text" class="form-control" required name="name" placeholder="Tên menu" value="<?php echo $row['menu_name']; ?>">
              <?php else: ?>
                <input type="text" readonly class="form-control" required name="name" placeholder="Tên menu" value="<?php echo $row['menu_name']; ?>">
              <?php endif; ?>
            </fieldset>
            <fieldset class="form-group">
              <label for="chitietsp">Liên kết</label>
              <?php if($row['menu_type']=='custom'): ?>
               <input type="text" class="form-control" required placeholder="Liên kết" name="link" value="<?php echo $row['menu_link']; ?>">
               <?php else: ?>
                <input type="text" readonly class="form-control" required placeholder="Liên kết" name="link" value="<?php echo $row['menu_link']; ?>">
              <?php endif; ?>
            </fieldset>

          </div>
          <div class="col-md-3">
            <fieldset class="form-group">
              <label for="parentid">Menu cha</label>
              <select name="parentid" class="form-control" id="parentid">
                <option value="">[--Chọn menu cha--]</option>
                <?php echo $html_parentid; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="vitri">Vị trí sắp xếp[đứng sau]</label>
              <select name="order" class="form-control" id="vitri">
                <option value="">[--Chọn vị trí sắp xếp--]</option>
                <?php echo $html_order; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="trangthai">Trạng thái</label>
              <select name="status" class="form-control" id="trangthai">
                <option value="1" <?php if($row['menu_status']==1) {echo 'selected';}  ?>>Xuất bản</option>
                <option value="2" <?php if($row['menu_status']==2) {echo 'selected';}  ?>> Chưa xuất bản</option>
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