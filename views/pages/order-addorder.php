<?php  

$order=loadModel('order');
$option=loadModel('option');
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

	// Lấy ra thông tin email chính chủ
    $arr_option = ['option_name' => 'email','menu_status' => 1];
    $sendmail = $option->get_inforwebsite($arr_option);
    $noteSend = "";
    $noteSend .= '<h3>Đơn hàng của bạn</h3><table class="table table-hover table-bordered bg-info text-white"><thead><tr><th>Sản phẩm</th><th>Tổng</th></tr></thead><tbody>';
  	$tong=0;
    foreach($cart as $k=>$r)
    {
    	$noteSend .= '<tr><td>'.$r['name'].'*'.$r['qty'].'</td>';
    	$tien=$r['price']*$r['qty'];
		$tong+=$tien;
		$noteSend .= '<td>'.$tien.'<sup>đ</sup></td>';
    }		
	$noteSend .= '<tr><td class="text-right" colspan="6"><strong>Tổng tiền: <span class="text-danger">'.number_format($tong).'<sup>đ</sup></span></strong></td></tr></tbody></table>';		
    $check  = sendmail( $sendmail['option_value'], "Bếp Quang Vinh", $title = "Đơn hàng mới", $detail = $noteSend);

	unset($_SESSION['cart']);
	set_flash('thongbao',['type'=>'success','msg'=>'Đặt hàng thành công']);
	redirect('gio-hang.html');
}
?>