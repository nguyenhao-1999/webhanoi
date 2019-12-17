<?php 
$id=$_REQUEST['id'];
$order=loadModel('order');
$orderdetail=loadModel('orderdetail');
$user=loadModel('user');
$product=loadModel('product');
$roworder=$order->order_rowid($id);
$rowuser=$user->user_rowid($roworder['order_userid'],-1);
$listorderdetail=$orderdetail->orderdetail_list($id);
$title="Chi tiết đơn hàng";
?>
<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
	<div class="container-fluid">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
						<div class="col-md-6 text-right">	
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
								<label for="tenkh">Tên khách hàng</label>
								<input type="text" name="fullname1" class="form-control" id="tenkh" disabled value="<?php echo $rowuser['user_fullname'];?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="ngaydh">Ngày đặt hàng</label>
								<input type="text" name="ngaydathang" class="form-control" id="ngaydh" disabled value="<?php echo $roworder['order_createdate'];?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="tennn">Tên người nhận</label>
								<input type="text" name="fullname2" class="form-control" id="tennn" disabled value="<?php echo $roworder['order_deliveryname'];?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="diachi">Địa chỉ người nhận</label>
								<input type="text" name="diachi" class="form-control" id="diachi" disabled value="<?php echo $roworder['order_deliveryaddress'];?>">
							</fieldset>
							<table class="table table-hover table-inverse table-bordered bg-info">
								<thead>
									<tr>
										<th>Tên sản phẩm</th>
										<th>Số lượng</th>
										<th>Đơn giá</th>
										<th>Thành tiền</th>
									</tr>
								</thead>
								<tbody>
									<?php $tong=0; ?>
									<?php foreach($listorderdetail as $row): ?>
										<tr>
											<?php
											$nameproduct=$product->product_rowid($row['orderdetail_productid']);
											?>
											<td><?php echo $nameproduct['product_name']; ?></td>
											<td><?php echo $row['orderdetail_quantity']; ?></td>
											<td><?php   echo number_format($row['orderdetail_price']); ?><sup>đ</sup></td>
											<td><?php   echo number_format($row['orderdetail_amount']); ?><sup>đ</sup></td>
											<?php $tong+=$row['orderdetail_amount']; ?>
										</tr>
									<?php endforeach; ?>
							
										<tr>
											<td class="text-right" colspan="6"><strong>Tổng tiền: <span class="text-danger"><?php echo number_format($tong); ?><sup>đ</sup></span></strong></td>
										</tr>
			
									<tfoot>
										<tr>
											<td class="text-right" colspan="6"><span class="btn btn-sm btn-danger">Hủy đơn hàng</span></td>
										</tr>
									</tfoot>
									

								</tbody>
							</table>
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
	} );</script>
	<?php require_once 'views/footer.php'; ?>