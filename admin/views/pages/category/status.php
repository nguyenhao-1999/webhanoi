<?php 
$category=loadModel('category');
$link =loadModel('link');
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
	$tt=($row['category_status']==1)?2:1;
	$data= array(
		'category_status'=>$tt,
		'category_createdat'=>date('Y-m-d H:i:s'),
		'category_createdby'=>$_SESSION['user_id']

	);
	$mydata=array(
		'link_status'=>$tt,
		'link_createdat'=>date('Y-m-d H:i:s'),
		'link_createdby'=>$_SESSION['user_id']
	);
	$category->category_update($data,$id);
	$link->link_update($mydata,$rowlink['link_id']);
	set_flash('thongbao',['type'=>'success','msg'=>'Thay đổi trạng thái thành công']);
	redirect('index.php?option=category');
}
?>