<?php 
$user=loadModel('user');
$list=$user->user_list('trash',1);
$title="Thùng rác sản phẩm";
?>
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
        <div class="col-md-6 text-right">
         <a href="index.php?option=user" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
       </div>	
     </div>
   </div>
   <div class="card-body">
    <?php require_once('views/message.php'); ?>
<table class="table table-hover table-inverse table-bordered" id="myTable">
      <thead>
        <tr>

          <th style="width:20px;">ID</th>
          <th style="width:540px;">Họ và tên</th>
          <th>Tên đăng nhập</th>
          <th>Email</th>
          <th style="width:160px;">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list as $rlist): ?>
          <tr>
            <?php   
            $id=$rlist['user_id']; ?>
            <td><?php echo $rlist['user_id']; ?></td>
            <td><?php echo $rlist['user_fullname']; ?></td>
            <td><?php echo $rlist['user_username'];   ?> </td>
            <td>
              <?php echo $rlist['user_email']; ?></td>
            <td>
              <a class="btn btn-sm btn-success" href="index.php?option=user&cat=retrash&id=<?php echo $id; ?>"><i class="fas fa-reply"></i></a>
              <a class="btn btn-sm btn-danger" href="index.php?option=user&cat=delete&id=<?php echo $id; ?>"><i class="far fa-trash-alt"></i></a>
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