<?php 
$order=loadModel('order');
$id=$_REQUEST['id'];
$row=$order->order_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã sản phẩm không tồn tại']);
	redirect('index.php?option=order');
}
else
{
	$tt=($row['order_status']==1)?2:1;
	$data= array(
		'order_status'=>$tt,
		'order_createdat'=>date('Y-m-d H:i:s'),
		'order_createdby'=>$_SESSION['user_id']

	);
	$order->order_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Thay đổi trạng thái thành công']);
	redirect('index.php?option=order');
}
?>