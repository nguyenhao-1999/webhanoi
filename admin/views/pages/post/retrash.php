<?php 
$post=loadModel('post');
$link=loadModel('link');
$id=$_REQUEST['id'];
$row=$post->post_rowid($id);
$rowlink=$link->link_rowslug($row['post_slug']);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã bài viết không tồn tại']);
	redirect('index.php?option=post&cat=trash');
}
else
{
	$data= array(
		'post_status'=>2,
		'post_createdat'=>date('Y-m-d H:i:s'),
		'post_createdby'=>$_SESSION['user_id']

	);
	$mtdata= array(
		'link_status'=>2,
		'link_createdat'=>date('Y-m-d H:i:s'),
		'link_createdby'=>$_SESSION['user_id']

	);
	$post->post_update($data,$id);
	$link->link_update($data,$rowlink['link_id']);
	set_flash('thongbao',['type'=>'success','msg'=>'Khôi phục thành công']);
	redirect('index.php?option=post&cat=trash');
}
?>