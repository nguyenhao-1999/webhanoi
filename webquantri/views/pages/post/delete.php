<?php 
$post=loadModel('post');
$id=$_REQUEST['id'];
$row=$post->post_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã bài viết không tồn tại.']);
	redirect('index.php?option=post&cat=trash');
}
else
{
	if(file_exists('../public/images/post/'.$row['post_img']))
	{
		unlink('../public/images/post/'.$row['post_img']);
	}
	$post->post_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=post&cat=trash');
}
?>