<?php 
$slider=loadModel('slider');
$id=$_REQUEST['id'];
$row=$slider->slider_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã silder không tồn tại']);
	redirect('index.php?option=slider');
}
else
{
	$tt=($row['slider_status']==1)?2:1;
	$data= array(
		'slider_status'=>$tt,
		'slider_createdat'=>date('Y-m-d H:i:s'),
		'slider_createdby'=>$_SESSION['user_id']

	);
	$slider->slider_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Thay đổi trạng thái thành công']);
	redirect('index.php?option=slider');
}
?>