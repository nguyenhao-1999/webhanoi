<?php 
$slider=loadModel('slider');
$id=$_REQUEST['id'];
$row=$slider->slider_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã slider không tồn tại']);
	redirect('index.php?option=slider');
}
else
{
	$data= array(
		'slider_status'=>0,
		'slider_createdat'=>date('Y-m-d H:i:s'),
		'slider_createdby'=>$_SESSION['user_id']

	);
	$slider->slider_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa vào thùng rác thành công']);
	redirect('index.php?option=slider');
}
?>