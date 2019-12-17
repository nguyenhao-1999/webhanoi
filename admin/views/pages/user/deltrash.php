<?php 
$user=loadModel('user');
$id=$_REQUEST['id'];
$row=$user->user_rowid($id,1);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Không có quyền']);
	redirect('index.php?option=user');
}
else
{
	$data= array(
		'user_status'=>0,
		'user_createdat'=>date('Y-m-d H:i:s'),
		'user_createdby'=>$_SESSION['user_id']

	);
	$user->user_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa vào thùng rác thành công']);
	redirect('index.php?option=user');
}
?>