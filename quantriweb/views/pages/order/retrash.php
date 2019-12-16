<?php 
$order=loadModel('order');
$id=$_REQUEST['id'];
$row=$order->order_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã sản phẩm không tồn tại']);
	redirect('index.php?option=order&cat=trash');
}
else
{
	$data= array(
		'order_status'=>2,
		'order_createdat'=>date('Y-m-d H:i:s'),
		'order_createdby'=>$_SESSION['user_id']

	);
	$order->order_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Khôi phục thành công']);
	redirect('index.php?option=order&cat=trash');
}
?>