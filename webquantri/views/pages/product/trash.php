<?php 
$product=loadModel('product');
$category=loadModel('category');
$list=$product->product_list('trash');
$title="Thùng rác sản phẩm";
?>

  <?php require_once 'views/header.php'; ?>

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Danh sách sản phẩm</a> </div>
    </div>
    <div class="container-fluid">

      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li class="bg_lo"> <a href="index.php?option=product"> <i class="icon-signout"></i> Thoát </a> </li>

        </ul>
      </div>

      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Danh sách sản phảm</h5>
            </div>
            <div class="widget-content nopadding">
              <table id="myTable" class="table table-bordered data-table">
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
                      $id=$rlist['product_id'];
                      $namecat=$category->category_namecat($rlist['product_catid']); ?>
                      <td><?php echo $rlist['product_id']; ?></td>
                      <td><img style="width:94px;"src="../public/images/product/<?php echo $rlist['product_img']; ?>"></td>
                      <td><?php echo $rlist['product_name']; ?></td>
                      <td>
                        <?php   echo $namecat; ?>
                      </td>
                      <td><?php echo $rlist['product_createdat']; ?></td>
                      <td>
                       <a class="btn btn-sm btn-success" href="index.php?option=product&cat=retrash&id=<?php echo $rlist['product_id']; ?>"><i class="icon-retweet"></i></a>
                       <a class="btn btn-sm btn-danger" href="index.php?option=product&cat=delete&id=<?php echo $rlist['product_id']; ?>"><i class="icon-trash"></i></a>
                     </td>
                   </tr>
                 <?php endforeach; ?>


                 <tr class="gradeX">

                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <?php require_once 'views/footer.php'; ?>