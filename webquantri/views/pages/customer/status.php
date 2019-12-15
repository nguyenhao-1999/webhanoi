<?php 
$user=loadModel('user');
$id=$_REQUEST['id'];
$row=$user->user_rowid($id,0);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã khách hàng không tồn tại']);
	redirect('index.php?option=customer');
}
else
{
	$tt=($row['user_status']==1)?2:1;
	$data= array(
		'user_status'=>$tt,
		'user_createdat'=>date('Y-m-d H:i:s'),
		'user_createdby'=>$_SESSION['user_id']

	);
	$user->user_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Thay đổi trạng thái thành công']);
	redirect('index.php?option=customer');
}
?>