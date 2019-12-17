<?php 
$contact=loadModel('contact');
$list=$contact->contact_list();
$title="Quản lý liên hệ";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" > 
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>  
        <div class="col-md-6 text-right"> 
         <a href="index.php?option=contact&cat=reply" class="btn btn-success"><i class="fas fa-plus"></i>Trả lời</a>
         <a href="index.php?option=contact&cat=trash" class="btn btn-danger"><i class="far fa-trash-alt"></i> Thùng rác</a>
       </div> 
     </div>
   </div>
   <div class="card-block p-3">
    <?php require_once('views/message.php'); ?>
    <table class="table table-hover table-inverse table-bordered" id="myTable">
      <thead>
        <tr>

          <th style="width:20px;">ID</th>
          <th style="width:150px;">Tên</th>
          <th>Số điện thoại</th>
          <th>Email</th>
          <th>Giới tính </th>
          <th>Ngày gửi</th>
          <th style="width:160px;">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list as $rlist): ?>
          <tr>
            <?php   
            $id=$rlist['contact_id'];
            ?>
            <td><?php echo $rlist['contact_id']; ?></td>
            <td><?php echo $rlist['contact_fullname']; ?></td>
            <td><?php echo $rlist['contact_phone']; ?></td>
            <td><?php echo $rlist['contact_email']; ?></td>
            <?php if($rlist['contact_gender']=='on'): ?>
            <td>Nam</td>
            <?php elseif($rlist['contact_gender']=='off'): ?>
              <td>Nữ</td>
            <?php else: ?>
              <td>Không xác định</td>
            <?php endif; ?>
          <td>
            <?php echo $rlist['contact_createdat']; ?></td>
            <td>
              <?php $status=($rlist['contact_status']==1)?'<i class="fas fa-toggle-on btn btn-info"></i>':'<i class="fas fa-toggle-off btn btn-danger"></i>' ?>
              <a href="index.php?option=contact&cat=status&id=<?php echo $id; ?>"><?php echo $status; ?></a>
              <a class="btn btn-sm btn-success" href="index.php?option=contact&cat=reply&id=<?php echo $id; ?>">Trả lời</a>
              <a class="btn btn-sm btn-danger" href="index.php?option=contact&cat=deltrash&id=<?php echo $id; ?>"><i class="far fa-trash-alt"></i></a>
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