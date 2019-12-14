<?php 
$product=loadModel('product');
$id=$_REQUEST['id'];
$row=$product->product_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã sản phẩm không tồn tại']);
	redirect('index.php?option=product');
}
else
{
	$tt=($row['product_status']==1)?2:1;
	$data= array(
		'product_status'=>$tt,
		'product_createdat'=>date('Y-m-d H:i:s'),
		'product_createdby'=>$_SESSION['user_id']

	);
	$product->product_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Thay đổi trạng thái thành công']);
	redirect('index.php?option=product');
}
?>