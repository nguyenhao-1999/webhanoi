<?php 
$category=loadModel('category');
$listcategory=$category->category_list('index');
$html_parentid='';
$html_order='';
foreach($listcategory as $cat)
{
  $html_parentid.="<option value='".$cat['category_id']."'>".$cat['category_name']."</option>";
  $html_order.="<option value='".$cat['category_order']."'>".$cat['category_name']."</option>";
}
$title="Thêm loại sản phẩm";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=category&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="THEM" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=category" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
          <?php require_once('views/message.php'); ?>
        <div class="row">
          <div class="col-md-9">
            <fieldset class="form-group">
              <label for="tenloai">Tên loại sản phẩm</label>
              <input type="text" name="name" class="form-control" id="tenloai" required placeholder="Tên loại sản phẩm">
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
              <label for="cha">Chủ đề cha</label>
              <select name="parentid" class="form-control" required id="cha">
                <option value="">[--Chọn loại chủ đề cha--]</option>
                <?php echo $html_parentid; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="vt">Sắp xếp đứng sau</label>
              <select name="order" class="form-control" required id="vt">
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
  } );</script>
  <?php require_once 'views/footer.php'; ?>