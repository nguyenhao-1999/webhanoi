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
    $sendmail = $option->get_field($arr_option);
    $noteSend = "";
  	$tong=0;
  	$send="";
    foreach($cart as $k=>$r)
    {
    	$tien=$r['price']*$r['qty'];
		$tong+=$tien;

    	$send .= '<tr><td>'.$r['name'].'</td><td>'.$r['qty'].'</td><td>'.number_format($tien).'<sup>đ</sup></td></tr>';
    }		
    $tong=number_format($tong);

    $noteSend .= ' <h2 class="title-cart">Đơn hàng</h2><div class="cart-center"><table class="table-cart"><thead><tr><th>Trên sản phẩm</th><th>Số lượng</th><th>Thành tiền</th></tr></thead><tbody>'.$send.'</tbody></table><div class="total-cart"><p><b>Tổng tiền : </b>'.$tong.'<sup>đ</sup></p></div></div><div class="address-cart"><h3>Thông tin khách hàng</h3><p><span>Họ tên người nhận: </span>'.$_POST['fullname'].'</p><p><span>Địa chỉ: </span>'.$_POST['address'].'</p><p><span>Điện Thoại: </span>'.$_POST['phone'].'</p><p><span>Thông tin thêm: </span>'.$_POST['content'].'</p></div><p class="date-cart">( BếpQuangVinh ngày '.date('d').' tháng '.date('m').' năm '.date('Y').'-'.date('h:i:s').' )</p>';


    $check  = sendmail( $sendmail['option_value'], "Bếp Quang Vinh", $title = "Đơn hàng mới", $detail = $noteSend);


	unset($_SESSION['cart']);
	set_flash('thongbao',['type'=>'success','msg'=>'Đặt hàng thành công']);
	redirect('gio-hang.html');
}
?>

