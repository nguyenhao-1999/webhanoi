<?php 
$category=loadModel('category');
$id=$_REQUEST['id'];
$row=$category->category_rowid($id);
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
	$category->category_update($data,$id);
	set_flash('thongbao',['type'=>'danger','success'=>'Khôi phục thành công']);
	redirect('index.php?option=category&cat=trash');
}
?>