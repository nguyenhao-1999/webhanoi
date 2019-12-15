<?php 
$post=loadModel('post');
$contact=loadModel('contact');
$list=$contact->contact_list('trash');
$title="Thùng rác liên hệ";
?>
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
        <div class="col-md-6 text-right">
         <a href="index.php?option=contact" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
       </div>	
     </div>
   </div>
   <div class="card-body">
    <?php require_once('views/message.php'); ?>
    <table class="table table-hover table-inverse table-bordered" id="myTable">
      <thead>
        <tr>
          <th style="width:20px;">ID</th>
          <th style="width:150px;">Tên</th>
          <th>Email</th>
          <th>Chủ đề</th>
          <th>Nội dung</th>
          <th>Ngày đăng</th>
          <th style="width:160px;">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list as $rlist): ?>
          <tr>
          	 <?php   
            $id=$rlist['contact_id']; ?>
            <td><?php echo $rlist['contact_id']; ?></td>
            <td><?php echo $rlist['contact_fullname']; ?></td>
            <td><?php echo $rlist['contact_email']; ?></td>
            <td><?php echo $rlist['contact_title']; ?></td>
            <td><?php echo $rlist['contact_detail']; ?></td>
            <td><?php echo $rlist['contact_createdat']; ?></td>
            <td>
               <a class="btn btn-sm btn-success" href="index.php?option=contact&cat=retrash&id=<?php echo $rlist['contact_id']; ?>"><i class="fas fa-reply"></i></a>
              <a class="btn btn-sm btn-danger" href="index.php?option=contact&cat=delete&id=<?php echo $rlist['contact_id']; ?>"><i class="far fa-trash-alt"></i></a>
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