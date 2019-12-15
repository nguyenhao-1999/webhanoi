<?php 
$topic=loadModel('topic');
$id=$_REQUEST['id'];
$row=$topic->topic_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã chủ đề không tồn tại.']);
	redirect('index.php?option=topic&cat=trash');
}
else
{
	$topic->topic_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=topic&cat=trash');
}
?>