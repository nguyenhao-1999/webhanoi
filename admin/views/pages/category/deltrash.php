<?php 
$category=loadModel('category');
$link=loadModel('link');
$id=$_REQUEST['id'];
$row=$category->category_rowid($id);
$rowlink=$link->link_rowslug($row['category_slug']);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã loại sản phẩm không tồn tại']);
	redirect('index.php?option=category');
}
else
{
	$data= array(
		'category_status'=>0,
		'category_createdat'=>date('Y-m-d H:i:s'),
		'category_createdby'=>$_SESSION['user_id']

	);
	$mydata= array(
		'link_status'=>0,
		'link_createdat'=>date('Y-m-d H:i:s'),
		'link_createdby'=>$_SESSION['user_id']

	);
	$category->category_update($data,$id);
	$link->link_update($mydata,$rowlink['link_id']);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa vào thùng rác thành công']);
	redirect('index.php?option=category');
}
?>