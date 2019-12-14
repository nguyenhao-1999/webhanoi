<?php 
$post=loadModel('post');
$id=$_REQUEST['id'];
$row=$post->post_rowid($id,'page');
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã bài viết không tồn tại.']);
	redirect('index.php?option=page&cat=trash');
}
else
{
	if(file_exists('../public/images/page/'.$row['post_img']))
	{
		unlink('../public/images/page/'.$row['post_img']);
	}
	$post->post_delete($id,'page');
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=page&cat=trash');
}
?>