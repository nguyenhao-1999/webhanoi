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
	if(file_exists('../public/images/order/'.$row['order_img']))
	{
		unlink('../public/images/order/'.$row['order_img']);
	}
	$order->order_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=order&cat=trash');
}
?>