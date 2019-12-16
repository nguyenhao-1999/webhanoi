<?php 
$category=loadModel('category');
$id=$_REQUEST['id'];
$row=$category->category_rowid($id);
if($row==null)
{
	set_flash('thongbao','Mã sản phẩm không tồn tại.');
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
	$category->category_update($data,$id);
	set_flash('thongbao','Thay đổi trạng thái thành công');
	redirect('index.php?option=category');
}
?>