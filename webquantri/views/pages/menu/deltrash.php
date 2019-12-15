<?php 
$menu=loadModel('menu');
$id=$_REQUEST['id'];
$row=$menu->menu_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã menu không tồn tại']);
	redirect('index.php?option=menu');
}
else
{
	$data= array(
		'menu_status'=>0,
		'menu_createdat'=>date('Y-m-d H:i:s'),
		'menu_createdby'=>$_SESSION['user_id']

	);
	$menu->menu_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa vào thùng rác thành công']);
	redirect('index.php?option=menu');
}
?>