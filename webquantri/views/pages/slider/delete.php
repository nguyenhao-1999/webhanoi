<?php 
$slider=loadModel('slider');
$id=$_REQUEST['id'];
$row=$slider->slider_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã slider không tồn tại']);
	redirect('index.php?option=slider&cat=trash');
}
else
{
	if(file_exists('../public/images/slider/'.$row['slider_img']))
	{
		unlink('../public/images/slider/'.$row['slider_img']);
	}
	$slider->slider_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=slider&cat=trash');
}
?>