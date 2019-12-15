<?php 
$post=loadModel('post');
$id=$_REQUEST['id'];
$row=$post->post_rowid($id,'page');
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã bài viết không tồn tại']);
	redirect('index.php?option=page');
}
else
{
	$tt=($row['post_status']==1)?2:1;
	$data= array(
		'post_status'=>$tt,
		'post_createdat'=>date('Y-m-d H:i:s'),
		'post_createdby'=>$_SESSION['user_id']

	);
	$post->post_update($data,$id,'page');
	set_flash('thongbao',['type'=>'success','msg'=>'Thay đổi trạng thái thành công']);
	redirect('index.php?option=page');
}
?>