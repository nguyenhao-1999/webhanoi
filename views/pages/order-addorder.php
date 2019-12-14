<?php  
$order=loadModel('order');
$product=loadModel('product');
$list_product=$product->product_list_all();
$orderdetail=loadModel('orderdetail');
$cart=$_SESSION['cart'];
if(isset($_POST['GUI']))
{
	$data=array(
		'order_code'=>"P".$order->order_code(),
		'order_deliveryaddress'=>$_POST['address'],
		'order_deliveryname'=>$_POST['fullname'],
		'order_deliveryphone'=>$_POST['phone'],
		'order_type'=>$_POST['type'],
		'order_note'=>$_POST['content'],
		'order_exportdate'=>date('Y-m-d H:i:s'),
		'order_createdate'=>date('Y-m-d H:i:s'),
		'order_updatedat'=>date('Y-m-d H:i:s'),
		'order_updatedby'=>1,
		'order_status'=>1
	);
	$orderid=$order->order_insert($data);
	foreach($cart as $k=>$r)
	{

		$data_detail=array(
			'orderdetail_orderid'=>$orderid,
			'orderdetail_productid'=>$r['id'],
			'orderdetail_price'=>$r['price'],
			'orderdetail_quantity'=>$r['qty'],
			'orderdetail_amount'=>$r['price']*$r['qty']
		);
		$orderdetail->orderdetail_insert($data_detail);
		foreach($list_product as $row)
		{
			if($r['id']==$row['product_id'])
			{
				$number=$row['product_number']-$r['qty'];
				$data=array(
				'product_number'=>$number,
				);
				$product->product_update($data,$row['product_id']);
			}
		}
	}
	unset($_SESSION['cart']);
	set_flash('thongbao',['type'=>'success','msg'=>'Đặt hàng thành công']);
	redirect('gio-hang.html');
}
?>