<?php 
$product=loadModel('product');
$id=$_REQUEST['id'];
$row=$product->product_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã sản phẩm không tồn tại']);
	redirect('index.php?option=product&cat=trash');
}
else
{
	$data= array(
		'product_status'=>2,
		'product_createdat'=>date('Y-m-d H:i:s'),
		'product_createdby'=>$_SESSION['user_id']

	);
	$product->product_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Khôi phục thành công']);
	redirect('index.php?option=product&cat=trash');
}
?>