<?php 
$category=loadModel('category');
$listcategory=$category->category_list('index');
$product=loadModel('product');
$id=$_REQUEST['id'];
$row=$product->product_rowid($id);
if($row==null)
{
  set_flash('thongbao','Mã sản phẩm không tồn tại.');
  redirect('index.php?option=product');
}
$html_catid='';
foreach($listcategory as $cat)
{
  if($cat['category_id']==$row['product_catid'])
  {
    $html_catid.="<option selected value='".$cat['category_id']."'>".$cat['category_name']."</option>";
  }
  else
  {
   $html_catid.="<option value='".$cat['category_id']."'>".$cat['category_name']."</option>";
 }
}
$title="Sửa sản phẩm";
?> 
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=product&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="CAPNHAT" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=product" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
        <?php require_once('views/message.php');?>
        <div class="row">
          <div class="col-md-9">
           <input type="hidden" name="id" value="<?php echo $row['product_id'];?>">
           <fieldset class="form-group">
            <label for="tensp">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" id="tensp" required placeholder="Tên sản phẩm" value="<?php echo $row['product_name'];?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="chitietsp">Chi tiết sản phẩm</label>
            <textarea name="detail" class="form-control" id="chitietsp" required rows="7"><?php echo $row['product_detail'];?></textarea>
          </fieldset>
          <fieldset class="form-group">
            <label for="mota">Mô tả sản phẩm</label>
            <textarea name="metadesc" class="form-control" id="mota" rows="2"><?php echo $row['product_metadesc'];?></textarea>
          </fieldset>
          <fieldset class="form-group">
            <label for="tukhoa">Từ khóa</label>
            <textarea name="metakey" class="form-control" id="tukhoa"rows="2"><?php echo $row['product_metakey'];?></textarea>
          </fieldset>

        </div>
        <div class="col-md-3">
          <fieldset class="form-group">
            <label for="loaisp">Loại sản phẩm</label>
            <select name="catid" class="form-control" id="loaisp">
              <option value=""></option>
              <?php echo $html_catid; ?>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="Gia">Giá</label>
            <input type="number" name="price" class="form-control" min="100000" step="1000" id="gia" value="<?php echo $row['product_price']; ?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="Gia">Giá khuyến mãi</label>

            <input type="number" name="pricesale" class="form-control" min="0" step="1000" id="giakm" value="<?php echo $row['product_pricesale']; ?>">

          </fieldset>
          <fieldset class="form-group">
            <label for="Gia">Số lượng</label>   
            <input type="number" name="number" class="form-control" min="1" max="1000" id="soluong" value="<?php echo $row['product_number']; ?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="trangthai">Trạng thái</label>
            <select name="status" class="form-control" id="trangthai">
              <option value="1" <?php if($row['product_status']==1) {echo 'selected';}  ?>>Xuất bản</option>
              <option value="2"<?php if($row['product_status']==2) {echo 'selected';}  ?>> Chưa xuất bản</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="hinh">Hình đại diện</label>
            <input type="file" name="img" class="form-control" id="hinh">
            <img src="../public/images/product/<?php echo $row['product_img']; ?>" class="w-100">
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