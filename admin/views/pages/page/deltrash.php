<?php 
$post=loadModel('post');
$link=loadModel('link');
$id=$_REQUEST['id'];
$row=$post->post_rowid($id,'page');
$rowlink=$link->link_rowslug($row['post_slug']);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã bài viết không tồn tại']);
	redirect('index.php?option=post');
}
else
{
	$data= array(
		'post_status'=>0,
		'post_createdat'=>date('Y-m-d H:i:s'),
		'post_createdby'=>$_SESSION['user_id']

	);
	$mydata= array(
		'link_status'=>0,
		'link_createdat'=>date('Y-m-d H:i:s'),
		'link_createdby'=>$_SESSION['user_id']

	);
	$post->post_update($data,$id);
	$link->link_update($mydata,$rowlink['link_id']);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa vào thùng rác thành công']);
	redirect('index.php?option=post');
}
?>