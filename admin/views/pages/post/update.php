<?php 
$post=loadModel('post');
$topic=loadModel('topic');
$listtopic=$topic->topic_list('index');
$id=$_REQUEST['id'];
$row=$post->post_rowid($id);
if($row==null)
{
  set_flash('thongbao',['type'=>'danger','msg'=>'Mã bài viết khôngs tồn tại']);
  redirect('index.php?option=post');
}
$html_catid='';
foreach($listtopic as $cat)
{
  if($cat['topic_id']==$row['post_topid'])
  {
    $html_catid.="<option selected value='".$cat['topic_id']."'>".$cat['topic_name']."</option>";
  }
  else
  {
   $html_catid.="<option value='".$cat['topic_id']."'>".$cat['topic_name']."</option>";
 }
}
$title="Sửa bài viết";
?> 
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=post&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="CAPNHAT" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=post" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
        <?php require_once('views/message.php');?>
        <div class="row">
          <div class="col-md-9">
           <input type="hidden" name="id" value="<?php echo $row['post_id'];?>">
           <fieldset class="form-group">
            <label for="tensp">Tên sản phẩm</label>
            <input type="text" name="title" class="form-control" id="tensp" required placeholder="Tên sản phẩm" value="<?php echo $row['post_title'];?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="chitietbv">Chi tiết bài viết</label>
            <textarea name="detail" class="form-control" id="chitietbv" required rows="7"><?php echo $row['post_detail'];?></textarea>
          </fieldset>
          <fieldset class="form-group">
            <label for="mota">Mô tả</label>
            <textarea name="metadesc" class="form-control" id="mota" rows="2"><?php echo $row['post_metadesc'];?></textarea>
          </fieldset>
          <fieldset class="form-group">
            <label for="tukhoa">Từ khóa</label>
            <textarea name="metakey" class="form-control" id="tukhoa"rows="2"><?php echo $row['post_metakey'];?></textarea>
          </fieldset>

        </div>
        <div class="col-md-3">
          <fieldset class="form-group">
            <label for="loaisp">Chủ đề bài viết</label>
            <select name="catid" class="form-control" id="loaisp">
              <option value=""></option>
              <?php echo $html_catid; ?>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="hinh">Hình đại diện</label>
            <input type="file" name="img" class="form-control" id="hinh">
            <img src="../public/images/post/<?php echo $row['post_img']; ?>" class="w-100">
          </fieldset>
          <fieldset class="form-group">
            <label for="trangthai">Trạng thái</label>
            <select name="status" class="form-control" id="trangthai">
              <option value="1" <?php if($row['post_status']==1) {echo 'selected';}  ?>>Xuất bản</option>
              <option value="2"<?php if($row['post_status']==2) {echo 'selected';}  ?>> Chưa xuất bản</option>
            </select>
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
     CKEDITOR.replace('chitietbv');
  } );</script>
  <?php require_once 'views/footer.php'; ?>