<?php 
$category=loadModel('category');
$id=$_REQUEST['id'];
$row=$category->category_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã loại sản phẩm không tồn tại']);
	redirect('index.php?option=category&cat=trash');
}
else
{
	$category->category_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=category&cat=trash');
}
?>