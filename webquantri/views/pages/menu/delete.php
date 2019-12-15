<?php 
$menu=loadModel('menu');
$id=$_REQUEST['id'];
$row=$menu->menu_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã menu không tồn tại']);
	redirect('index.php?option=menu&cat=trash');
}
else
{
	$menu->menu_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=menu&cat=trash');
}
?>