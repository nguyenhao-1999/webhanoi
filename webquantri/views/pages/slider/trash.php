<?php 
$slider=loadModel('slider');
$list=$slider->slider_list('trash');
$title="Thùng rác silder";
?>
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
        <div class="col-md-6 text-right">
         <a href="index.php?option=slider" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
       </div>	
     </div>
   </div>
   <div class="card-body">
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
            $id=$rlist['slider_id'];?>
            <td><?php echo $rlist['slider_id']; ?></td>
            <td><img style="width:94px;"src="../public/images/slider/<?php echo $rlist['slider_img']; ?>"></td>
            <td><?php echo $rlist['slider_name']; ?></td>
            <td>
            	<?php echo $rlist['slider_position']; ?>
            </td>
            <td><?php echo $rlist['slider_createdat']; ?></td>
            <td>
               <a class="btn btn-sm btn-success" href="index.php?option=slider&cat=retrash&id=<?php echo $rlist['slider_id']; ?>"><i class="fas fa-reply"></i></a>
              <a class="btn btn-sm btn-danger" href="index.php?option=slider&cat=delete&id=<?php echo $rlist['slider_id']; ?>"><i class="far fa-trash-alt"></i></a>
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