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
	$data= array(
		'post_status'=>0,
		'post_createdat'=>date('Y-m-d H:i:s'),
		'post_createdby'=>$_SESSION['user_id']

	);
	$post->post_update($data,$id,'page');
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa vào thùng rác thành công']);
	redirect('index.php?option=page');
}
?>