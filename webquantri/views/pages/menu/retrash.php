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
	$data= array(
		'menu_status'=>2,
		'menu_createdat'=>date('Y-m-d H:i:s'),
		'menu_createdby'=>$_SESSION['user_id']

	);
	$menu->menu_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Khôi phục thành công']);
	redirect('index.php?option=menu&cat=trash');
}
?>