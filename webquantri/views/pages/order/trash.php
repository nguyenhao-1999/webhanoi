<?php 
$user=loadModel('user');
$order=loadModel('order');
$list=$order->order_list('trash');
$title="Thùng rác đơn hàng";
?>
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
        <div class="col-md-6 text-right">
         <a href="index.php?option=order" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
       </div>	
     </div>
   </div>
   <div class="card-body">
    <?php require_once('views/message.php'); ?>
    <table class="table table-hover table-inverse table-bordered" id="myTable">
      <thead>
        <tr>
          <th style="width:20px;">ID</th>
          <th>Mã đơn hàng</th>
          <th>Họ tên khách hàng</th>
          <th>Email</th>
          <th>Ngày tạo</th>
          <th style="width:160px;">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list as $rlist): ?>
          <tr>
           <?php   
            $id=$rlist['order_id'];
             $listuser=$user->user_rowid($rlist['order_userid']);
           ?>
            <td><?php echo $rlist['order_id']; ?></td>
            <td><?php echo $rlist['order_code']; ?></td>
            <td><?php   echo $listuser['user_fullname']; ?></td>
            <td><?php   echo $listuser['user_email']; ?></td>
            <td>
              <?php echo $rlist['order_createdate']; ?></td>
            <td>
              <a class="btn btn-sm btn-success" href="index.php?option=order&cat=retrash&id=<?php echo $id; ?>"><i class="fas fa-reply"></i></a>
              <a class="btn btn-sm btn-danger" href="index.php?option=order&cat=deltrash&id=<?php echo $id; ?>"><i class="far fa-trash-alt"></i></a>
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