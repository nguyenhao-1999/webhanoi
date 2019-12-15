<?php 
$category=loadModel('category');
if(isset($_POST["THEM"]))
{
	if($category->category_exists_name($_POST['name']))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'category_name'=>$_POST['name'],
			'category_slug'=>$slug,
			'category_parentid'=>$_POST['parentid'],
			'category_metakey'=>$_POST['metakey'],
			'category_metadesc'=>$_POST['metadesc'],
			'category_order'=>($_POST['order']+1),
			'category_createdat'=>date('Y-m-d H:i:s'),
			'category_createdby'=>$_SESSION['user_id'],
			'category_updatedat'=>date('Y-m-d H:i:s'),
			'category_updatedby'=>$_SESSION['user_id'],
			'category_status'=>$_POST['status']
		);
		$category->category_insert($mydata);
		set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
		redirect('index.php?option=category');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên loại sản phẩm đã tồn tại']);
		redirect('index.php?option=category&cat=insert');
	}
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_POST['id'];
	$row=$category->category_rowid($id);
	if($category->category_exists_name($_POST['name'],$id))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'category_name'=>$_POST['name'],
			'category_slug'=>$slug,
			'category_parentid'=>$_POST['parentid'],
			'category_metakey'=>$_POST['metakey'],
			'category_metadesc'=>$_POST['metadesc'],
			'category_order'=>($_POST['order']+1),
			'category_updatedat'=>date('Y-m-d H:i:s'),
			'category_updatedby'=>$_SESSION['user_id'],
			'category_status'=>$_POST['status']
		);
		$category->category_update($mydata,$id);
		set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
		redirect('index.php?option=category');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên loại sản phẩm đã tồn tại']);
		redirect('index.php?option=category&cat=update');
	}
}
?>