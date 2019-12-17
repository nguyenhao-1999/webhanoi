<?php 
$category=loadModel('category');
$link=loadModel('link');
$id=$_REQUEST['id'];
$row=$category->category_rowid($id);
$rowlink=$link->link_rowslug($row['category_slug']);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã loại sản phẩm không tồn tại']);
	redirect('index.php?option=category&cat=trash');
}
else
{
	$data= array(
		'category_status'=>2,
		'category_createdat'=>date('Y-m-d H:i:s'),
		'category_createdby'=>$_SESSION['user_id']

	);
	$mtdata= array(
		'link_status'=>2,
		'link_createdat'=>date('Y-m-d H:i:s'),
		'link_createdby'=>$_SESSION['user_id']

	);
	$category->category_update($data,$id);
	$link->link_update($data,$rowlink['link_id']);
	set_flash('thongbao',['type'=>'success','msg'=>'Khôi phục thành công']);
	redirect('index.php?option=category&cat=trash');
}
?>