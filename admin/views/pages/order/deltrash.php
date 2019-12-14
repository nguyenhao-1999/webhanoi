<?php 
$order=loadModel('order');
$id=$_REQUEST['id'];
$row=$order->order_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã đơn hàng không tồn tại']);
	redirect('index.php?option=order');
}
else
{
	$data= array(
		'order_status'=>0,
		'order_updatedat'=>date('Y-m-d H:i:s'),
		'order_updatedby'=>$_SESSION['user_id']

	);
	$order->order_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa vào thùng rác thành công']);
	redirect('index.php?option=order');
}
?>