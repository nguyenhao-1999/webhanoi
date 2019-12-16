<?php 
$orderdetail =loadModel('orderdetail');
$order=loadModel('order');
$product=loadModel('product');
$id=$_REQUEST['id'];
$row=$order->order_rowid($id);
$add = json_decode($row['order_deliveryaddress']);
$address = $add['0']." - ".$add['1']." - ".$add['2']." - ".$add['3'];


if($row==null)
{
  set_flash('thongbao','Mã sản phẩm không tồn tại.');
  redirect('index.php?option=order');
}
$list_orderdetail = $orderdetail->orderdetail_list($id);
$title="Xem và chỉnh đơn hàng";
?> 
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=order&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>  
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="CAPNHAT" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=order" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
        <?php require_once('views/message.php');?>
        <div class="row">
          <div class="col-md-12">
           <input type="hidden" name="id" value="<?php echo $row['order_id'];?>">
           <fieldset class="form-group">
            <label for="tensp">Tên người nhận</label>
            <input type="text" name="name" class="form-control" id="tensp" required placeholder="Tên sản phẩm" value="<?php echo $row['order_deliveryname'];?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="tensp">Số điện thoại</label>
            <input type="text" name="order_deliveryphone" class="form-control" id="order_deliveryphone" required placeholder="Tên sản phẩm" value="<?php echo $row['order_deliveryphone'];?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="tensp">Email người nhận</label>
            <input type="text" name="order_deliveryemail" class="form-control" id="order_deliveryemail" required placeholder="Tên sản phẩm" value="<?php echo $row['order_deliveryemail'];?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="tensp">Địa chỉ hàng</label>
            <input type="text" name="address" class="form-control" id="address" required placeholder="Tên sản phẩm" value="<?php echo $address;?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="tensp">Ngày đặt hàng</label>
            <input type="date" name="create_order" class="form-control" id="create_order" required placeholder="Tên sản phẩm" readonly value="<?php echo $row['order_createdate'];?>">
          </fieldset>
          <fieldset class="form-group">
            <label for="tensp">Ngày giao hàng dự kiến</label>
            <input type="date" name="check_order" class="form-control" id="check_order" required placeholder="Tên sản phẩm" readonly value="<?php echo $row['order_exportdate'];?>">
          </fieldset>
          <h4>Danh sách sản phẩm</h4>
          <fieldset class="jumbotron">
            <ol>
              <?php foreach ($list_orderdetail as $key => $orderdetail) {
                $row=$product->product_rowid($orderdetail['orderdetail_productid']);
                echo  '<li>'. $row['product_name'].'</li>';
              } ?>
            </ol>
          </fieldset>

        </div>
      </div>
    </div>
  </div>
</form>
</div>
</section>
<?php require_once 'views/footer.php'; ?>