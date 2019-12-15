<?php 
$topic=loadModel('topic');
$id=$_REQUEST['id'];
$row=$topic->topic_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã chủ đề không tồn tại']);
	redirect('index.php?option=topic&cat=trash');
}
else
{
	$data= array(
		'topic_status'=>2,
		'topic_createdat'=>date('Y-m-d H:i:s'),
		'topic_createdby'=>$_SESSION['user_id']
	);
	$topic->topic_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Khôi phục thành công']);
	redirect('index.php?option=topic&cat=trash');
}
?>