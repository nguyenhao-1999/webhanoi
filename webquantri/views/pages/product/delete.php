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
	if(file_exists('../public/images/product/'.$row['product_img']))
	{
		unlink('../public/images/product/'.$row['product_img']);
	}
	$product->product_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=product&cat=trash');
}
?>