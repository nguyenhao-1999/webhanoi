<?php 
$post=loadModel('post');
$link =loadModel('link');
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
	$tt=($row['post_status']==1)?2:1;
	$data= array(
		'post_status'=>$tt,
		'post_createdat'=>date('Y-m-d H:i:s'),
		'post_createdby'=>$_SESSION['user_id']

	);
	$mydata=array(
		'link_status'=>$tt,
		'link_createdat'=>date('Y-m-d H:i:s'),
		'link_createdby'=>$_SESSION['user_id']
	);
	$post->post_update($data,$id);
	$link->link_update($mydata,$rowlink['link_id']);
	set_flash('thongbao',['type'=>'success','msg'=>'Thay đổi trạng thái thành công']);
	redirect('index.php?option=post');
}
?>