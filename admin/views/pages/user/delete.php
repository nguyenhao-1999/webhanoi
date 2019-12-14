<?php 
$user=loadModel('user');
$id=$_REQUEST['id'];
$row=$user->user_rowid($id,1);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Không có quyền']);
	redirect('index.php?option=user&cat=trash');
}
else
{
	if(file_exists('../public/images/user/'.$row['user_img']))
	{
		unlink('../public/images/user/'.$row['user_img']);
	}
	$user->user_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=user&cat=trash');
}
?>