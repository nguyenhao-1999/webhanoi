<?php 
$category=loadModel('category');
$link=loadModel('link');
$id=$_REQUEST['id'];
$row=$category->category_rowid($id);
$rowlink=$link->link_rowslug($row['category_slug']);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã loại sản phẩm không tồn tại']);
	redirect('index.php?option=category&cat=trash');
}
else
{
	$category->category_delete($id);
	$link->link_delete($rowlink['link_id']);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=category&cat=trash');
}
?>