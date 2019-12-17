<?php 
$post=loadModel('post');
$topic=loadModel('topic');
$list=$post->post_list('trash');
$title="Thùng rác bài viết";
?>
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
        <div class="col-md-6 text-right">
         <a href="index.php?option=post" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
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
          <th style="width:540px;">Tiêu đề bài viết</th>
          <th>Chủ đề bài viết</th>
          <th>Ngày đăng</th>
          <th style="width:160px;">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list as $rlist): ?>
          <tr>
          	 <?php   
            $id=$rlist['post_id'];
            $nametop=$topic->topic_nametop($rlist['post_topid']); ?>
            <td><?php echo $rlist['post_id']; ?></td>
            <td><img style="width:94px;"src="../<?php echo $rlist['post_img']; ?>"></td>
            <td><?php echo $rlist['post_title']; ?></td>
            <td>
            	<?php 	echo $nametop; ?>
            </td>
            <td><?php echo $rlist['post_createdat']; ?></td>
            <td>
               <a class="btn btn-sm btn-success" href="index.php?option=post&cat=retrash&id=<?php echo $rlist['post_id']; ?>"><i class="fas fa-reply"></i></a>
              <a class="btn btn-sm btn-danger" href="index.php?option=post&cat=delete&id=<?php echo $rlist['post_id']; ?>"><i class="far fa-trash-alt"></i></a>
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