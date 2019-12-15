<?php 
$menu=loadModel('menu');
$category=loadModel('category');
$topic=loadModel('topic');
$post=loadModel('post');
$list=$menu->menu_list();
$listcat=$category->category_list('index');
$listtop=$topic->topic_list();
$listpage=$post->post_list('index','page');
$title="TẤT CẢ MENU";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" > 
 <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6"><h3><?php echo $title; ?></h3></div>  
        <div class="col-md-6 text-right"> 
         <a href="index.php?option=menu&cat=trash" class="btn btn-danger"><i class="far fa-trash-alt"></i> Thùng rác</a>
       </div> 
     </div>
   </div>
   <div class="card-block p-3">
    <?php require_once('views/message.php'); ?>
    <div class="row">
      <div class="col-md-3 bg-light menu">
        <h3>Thành phần menu</h3>
        <form action="index.php?option=menu&cat=process" method="post" enctype="multipart/form-data">
          <div class="card p-3">
          <fieldset class="form-group">
            <label for="formGroupExampleInput">Vị trí menu</label>
            <select name="position" class="form-control">
              <option value="mainmenu">Menu chính</option>
              <option value="topmenu">Menu top</option>
              <option value="footermenu">Menu footer</option>
            </select>
          </fieldset>
        </div>
          <div class="dropdown mb-3">
            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Loại sản phẩm
           </button>
           <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
             <?php foreach($listcat as $row): ?>
              <li><input type="checkbox" value="<?php echo $row['category_id']; ?>" name="category[]"/>&nbsp;<?php echo $row['category_name']; ?></li>
            <?php endforeach; ?>
            <button class="btn btn-success w-100" name="THEMCATEGORY" type="submit">Thêm</button>
          </div>
        </div>
        <div class="dropdown mb-3">
          <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Chủ đề    
          </button>
          <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
            <?php foreach($listtop as $row): ?>
              <li><input type="checkbox"  value="<?php echo $row['topic_id']; ?> " name="topic[]"/>&nbsp;<?php echo $row['topic_name']; ?></li>
            <?php endforeach; ?>
            <div class="text-center"><button type="submit" class="btn btn-success w-100" name="THEMTOPIC">Thêm</button></div>
          </div>
        </div>
        <div class="dropdown mb-3">
          <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Trang đơn</button>
          <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
            <?php foreach($listpage as $row): ?>
              <li><input type="checkbox" value="<?php echo $row['post_id']; ?> " name="page[]"/>&nbsp;<?php echo $row['post_title']; ?></li>
            <?php endforeach; ?>
            <div class="text-center"><button type="submit" class="btn btn-success w-100" name="THEMPAGE">Thêm</button></div>
          </div>
        </div>
        <div class="dropdown mb-3">
          <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tùy chọn</button>
          <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
            <fieldset class="form-group">
              <label for="tenmenu">Tên menu</label>
              <input type="text" name="name" class="form-control" id="tenmenu" placeholder="Tên menu">
            </fieldset>
            <fieldset class="form-group">
              <label for="link">Liên kết</label>
              <input type="text" name="link" class="form-control" id="link" placeholder="Liên kết">
            </fieldset>
            <fieldset class="form-group">
              <div class="text-center mt-2"><button type="submit" class="btn btn-success form-control w-100" name="THEMCUSTOM">Thêm</button></div>
            </fieldset>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-9">
      <table class="table table-hover table-inverse table-bordered" id="myTable">
        <thead>
          <tr>

            <th style="width:20px;">ID</th>
            <th >Tên menu</th>
            <th>Liên kết(link)</th>
            <th >Vị trí</th>
            <th>Ngày đăng</th>
            <th style="width:160px;">Chức năng</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($list as $rlist): ?>
            <tr>
              <?php   
              $id=$rlist['menu_id'];?>
              <td><?php echo $rlist['menu_id']; ?></td>
              <td><?php echo $rlist['menu_name']; ?></td>
              <td><?php echo $rlist['menu_link'];?>
              <td><?php echo $rlist['menu_position'];?>
            </td>
            <td>
              <?php echo $rlist['menu_createdat']; ?></td>
              <td>
                <?php $status=($rlist['menu_status']==1)?'<i class="fas fa-toggle-on btn btn-info"></i>':'<i class="fas fa-toggle-off btn btn-danger"></i>' ?>
                <a href="index.php?option=menu&cat=status&id=<?php echo $id; ?>"><?php echo $status; ?></a>
                <a class="btn btn-sm btn-success" href="index.php?option=menu&cat=update&id=<?php echo $id; ?>"><i class="fas fa-edit"></i></a>
                <a class="btn btn-sm btn-danger" href="index.php?option=menu&cat=deltrash&id=<?php echo $id; ?>"><i class="far fa-trash-alt"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</section>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );

</script>
<?php require_once 'views/footer.php'; ?>