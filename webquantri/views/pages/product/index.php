<?php 
$product=loadModel('product');
$category=loadModel('category');
$list=$product->product_list();
$title="Quản lý tất cả sản phẩm";
?>

<?php require_once 'views/header.php'; ?>
    
   <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Danh sách sản phẩm</a> </div>
    </div>
    <div class="container-fluid">

      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li class="bg_lb"> <a href="index.php?option=product&cat=insert"> <i class="icon-plus"></i> Thêm mới </a> </li>
          <li class="bg_lg span3"> <a href="index.php?option=product&cat=trash"> <i class="icon-trash"></i>  Thùng rác </a> </li>

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
              <table class="table table-bordered data-table">
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
                    <tr  class="gradeX">
                      <?php   
                      $id=$rlist['product_id'];
                      $namecat=$category->category_namecat($rlist['product_catid']); ?>
                      <td><?php echo $rlist['product_id']; ?></td>
                      <td><!-- <img style="width:94px;" src="../public/images/product/<?php echo $rlist['product_img']; ?>"> --></td>
                      <td><?php echo $rlist['product_name']; ?></td>
                      <td><?php   echo $namecat; ?>
                    </td>
                    <td>
                      <?php echo $rlist['product_createdat']; ?></td>
                      <td>
                        <?php $status=($rlist['product_status']==1)?'<i class="icon-check btn btn-info"></i>':'<i class="icon-check-empty btn btn-danger"></i>' ?>
                        <a href="index.php?option=product&cat=status&id=<?php echo $id; ?>"><?php echo $status; ?></a>
                        <a class="btn btn-sm btn-success" href="index.php?option=product&cat=update&id=<?php echo $id; ?>"><i class="icon-pencil"></i></a>
                        <a class="btn btn-sm btn-danger" href="index.php?option=product&cat=deltrash&id=<?php echo $id; ?>"><i class=" icon-minus-sign"></i></a>
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