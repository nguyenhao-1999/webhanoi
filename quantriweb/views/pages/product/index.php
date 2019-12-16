<?php 
$product=loadModel('product');
$category=loadModel('category');
$list=$product->product_list();
$title="Quản lý tất cả sản phẩm";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" > 
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>  
        <div class="col-md-6 text-right"> 
         <a href="index.php?option=product&cat=insert" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
         <a href="index.php?option=product&cat=trash" class="btn btn-danger"><i class="far fa-trash-alt"></i> Thùng rác</a>
       </div> 
     </div>
   </div>
   <div class="card-block p-3">
    <?php require_once('views/message.php'); ?>
    <table class="table table-hover table-inverse table-bordered" id="myTable">
      <thead>
        <tr>

          <th style="width:20px;">ID</th>
          <th style="width:94px;">Hình ảnh</th>
          <th style="width:540px;">Tên sản phẩm</th>
          <th>Loại sản phẩm</th>
          <th>Ngày đăng</th>
          <th style="width:160px;">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list as $rlist): ?>
          <tr>
            <?php   
            $id=$rlist['product_id'];
            $namecat=$category->category_namecat($rlist['product_catid']); ?>
            <td><?php echo $rlist['product_id']; ?></td>
            <td><img style="width:94px;"src="../public/images/product/<?php echo $rlist['product_img']; ?>"></td>
            <td><?php echo $rlist['product_name']; ?></td>
            <td><?php   echo $namecat; ?>
          </td>
            <td>
              <?php echo $rlist['product_createdat']; ?></td>
            <td>
              <?php $status=($rlist['product_status']==1)?'<i class="fas fa-toggle-on btn btn-info"></i>':'<i class="fas fa-toggle-off btn btn-danger"></i>' ?>
              <a href="index.php?option=product&cat=status&id=<?php echo $id; ?>"><?php echo $status; ?></a>
              <a class="btn btn-sm btn-success" href="index.php?option=product&cat=update&id=<?php echo $id; ?>"><i class="fas fa-edit"></i></a>
              <a class="btn btn-sm btn-danger" href="index.php?option=product&cat=deltrash&id=<?php echo $id; ?>"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>
</div>
</section>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
<?php require_once 'views/footer.php'; ?>