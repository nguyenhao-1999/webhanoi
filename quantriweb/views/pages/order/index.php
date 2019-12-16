<?php 
$order=loadModel('order');
$category=loadModel('category');
$list=$order->order_list();
$title="Quản lý tất cả đơn hàng";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" > 
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>  
        <div class="col-md-6 text-right"> 
         <a href="index.php?option=order&cat=insert" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
         <a href="index.php?option=order&cat=trash" class="btn btn-danger"><i class="far fa-trash-alt"></i> Thùng rác</a>
       </div> 
     </div>
   </div>
   <div class="card-block p-3">
    <?php require_once('views/message.php'); ?>
    <table class="table table-hover table-inverse table-bordered" id="myTable">
      <thead>
        <tr>
          <th style="width:494px;">Tên khách hàng</th>
          <th style="width:240px;">Thời gian đặt hàng</th>
          <th style="width:240px;">Thời gian dao hàng dư kiến</th>
          <th style="width:240px;">Email</th>
          <th style="width:200px;">SĐT</th>
          <th style="width:230px;">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list as $rlist): $id = $rlist['order_id'];?>
          <tr>
            <td><?php echo $rlist['order_deliveryname']; ?></td>
            <td>
              <?php echo $rlist['order_createdate']; ?>
            </td>
            <td>
              <?php echo $rlist['order_exportdate']; ?>
            </td>
            <td>
              <?php echo $rlist['order_deliveryemail']; ?>
            </td>
            <td>
              <?php echo $rlist['order_deliveryphone']; ?>
            </td>
            <td>
              <?php $status=($rlist['order_status']==1)?'<i class="fas fa-toggle-on btn btn-info"></i>':'<i class="fas fa-toggle-off btn btn-danger"></i>' ?>
              <a href="index.php?option=order&cat=status&id=<?php echo $id; ?>"><?php echo $status; ?></a>
              <a class="btn btn-sm btn-success" href="index.php?option=order&cat=update&id=<?php echo $id; ?>"><i class="fas fa-edit"></i></a>
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