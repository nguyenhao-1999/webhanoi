<?php 
$product=loadModel('product');
$category=loadModel('category');
$list=$category->category_list();
$title="Quản lý loại sản phẩm";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
        <div class="col-md-6 text-right">	
         <a href="index.php?option=category&cat=insert" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
         <a href="index.php?option=category&cat=trash" class="btn btn-danger"><i class="far fa-trash-alt"></i> Thùng rác</a>
       </div>	
     </div>
   </div>
   <div class="card-block p-3">
    <?php require_once('views/message.php'); ?>
    <table class="table table-hover table-inverse table-bordered" id="myTable">
      <thead>
        <tr>
          <th style="width:20px;">ID</th>
          <th style="width:540px;">Tên loại sản phẩm</th>
          <th>Liên kết(Slug)</th>
          <th>Ngày đăng</th>
          <th style="width:160px;">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list as $rlist): ?>
          <tr>
           <?php   
            $id=$rlist['category_id'];
           ?>
            <td><?php echo $rlist['category_id']; ?></td>
            <td><?php echo $rlist['category_name']; ?></td>
            <td><?php   echo $rlist['category_slug']; ?></td>
            <td>
              <?php echo $rlist['category_createdat']; ?></td>
            <td>
              <?php $status=($rlist['category_status']==1)?'<i class="fas fa-toggle-on btn btn-info"></i>':'<i class="fas fa-toggle-off btn btn-danger"></i>' ?>
              <a href="index.php?option=category&cat=status&id=<?php echo $id; ?>"><?php echo $status; ?></a>
              <a class="btn btn-sm btn-success" href="index.php?option=category&cat=update&id=<?php echo $id; ?>"><i class="fas fa-edit"></i></a>
              <a class="btn btn-sm btn-danger" href="index.php?option=category&cat=deltrash&id=<?php echo $id; ?>"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>
</div>
</section>
<?php require_once 'views/footer.php'; ?>