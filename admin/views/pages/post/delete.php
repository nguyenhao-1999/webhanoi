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
	$post->post_delete($id);
	$link->link_delete($rowlink['link_id']);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=post&cat=trash');
}
?>