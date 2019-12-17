<?php 
$id=$_REQUEST['id'];
$user=loadModel('user');
$listuser=$user->user_list('index',1);
$row=$user->user_rowid($id,1);
$title="Sửa thành viên";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" > 
 <div class="container-fluid">
  <form action="index.php?option=user&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>  
          <div class="col-md-6 text-right"> 
            <button class="btn btn-sm btn-success" name="CAPNHAT" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=user" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>  
        </div>
      </div>
      <div class="card-block p-3">
          <?php require_once('views/message.php'); ?>
        <div class="row">
          <div class="col-md-9">
             <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
            <fieldset class="form-group">
              <label for="tensp">Họ tên thành viên</label>
              <input type="text" name="fullname" class="form-control" id="tensp" required placeholder="Họ tên thành viên" value="<?php echo $row['user_fullname']; ?>">
            </fieldset>
            <fieldset class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" required placeholder="Thư điện tử" value="<?php echo $row['user_email']; ?>">
            </fieldset>
           <fieldset class="form-group">
              <label for="tendn">Tên đăng nhập</label>
              <input type="text" name="username" class="form-control" id="tendn" required placeholder="Tên đăng nhập" value="<?php echo $row['user_username']; ?>">
            </fieldset>
             <fieldset class="form-group">
              <label for="tendn">Số điện thoại</label>
              <input type="phone" name="phone" class="form-control" id="tendn" required placeholder="Số điện thoại" value="<?php echo $row['user_phone']; ?>">
            </fieldset>

            <fieldset class="form-group">
              <label for="mk">Mật khẩu hiện tại</label>
              <input type="password" name="passwordcurrent" class="form-control" id="mk" required placeholder="Mật khẩu hiện tại">
            </fieldset>
             <fieldset class="form-group">
              <label for="mk">Mật khẩu mới</label>
              <input type="password" name="password" class="form-control" id="mk" required placeholder="Mật khẩu" >
            </fieldset>
            <fieldset class="form-group">
              <label for="mk">Xác nhận mật khẩu</label>
              <input type="password" name="password2" class="form-control" id="mk" required placeholder="Xác nhận mật khẩu">
            </fieldset>
          </div>
          <div class="col-md-3">
           <fieldset class="form-group">
              <label for="gender">Giới tính</label>
              <select name="gender" class="form-control" id="gender">
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="access">Xét quyền</label>
              <select name="access" class="form-control" id="access">
                <option value="1">Administrator</option>
                <option value="0"></option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="hinh">Hình đại diện</label>
              <input type="file" name="img" class="form-control"  id="hinh">
            </fieldset>
            <fieldset class="form-group">
              <label for="trangthai">Trạng thái</label>
              <select name="status" class="form-control" id="trangthai">
                <option value="1" <?php if($row['post_status']==1) {echo 'selected';}  ?>>Kích hoạt</option>
                <option value="2" <?php if($row['post_status']==2) {echo 'selected';}  ?>>Không kích hoạt</option>
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
  } );
  CKEDITOR.replace('chitietsp');
</script>

  <?php require_once 'views/footer.php'; ?>