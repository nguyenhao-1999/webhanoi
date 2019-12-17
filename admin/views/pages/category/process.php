<?php 
$option=loadModel('option');
$link=loadModel('link');
$home_url = $option->get_field(["option_name" => 'home_url', 'menu_status' => 1]);
$category=loadModel('category');
if(isset($_POST["THEM"]))
{
	if($category->category_exists_name($_POST['name']))
	{
		$str_img = str_replace( $home_url["option_value"], '', $_POST['img'] );
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'category_name'=>$_POST['name'],
			'category_slug'=>$slug,
			'category_parentid'=>$_POST['parentid'],
			'category_img'=>$str_img,
			'category_type'=>'category',
			'category_trademark'=>$_POST['trademark'],
			'category_metakey'=>$_POST['metakey'],
			'category_metadesc'=>$_POST['metadesc'],
			'category_order'=>($_POST['order']+1),
			'category_createdat'=>date('Y-m-d H:i:s'),
			'category_createdby'=>$_SESSION['user_id'],
			'category_updatedat'=>date('Y-m-d H:i:s'),
			'category_updatedby'=>$_SESSION['user_id'],
			'category_status'=>$_POST['status']
		);
		$data=array(
			'link_slug'=>$slug,
			'link_type'=>'category',
			'link_tableid'=>'1',
			'link_createdat'=>date('Y-m-d H:i:s'),
			'link_createdby'=>$_SESSION['user_id'],
			'link_updatedat'=>date('Y-m-d H:i:s'),
			'link_updatedby'=>$_SESSION['user_id'],
			'link_status'=>$_POST['status']
		);
		$category->category_insert($mydata);
		$link->link_insert($data);
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
			'category_type'=>'category',
			'category_trademark'=>$_POST['trademark'],
			'category_metakey'=>$_POST['metakey'],
			'category_metadesc'=>$_POST['metadesc'],
			'category_order'=>($_POST['order']+1),
			'category_updatedat'=>date('Y-m-d H:i:s'),
			'category_updatedby'=>$_SESSION['user_id'],
			'category_status'=>$_POST['status']
		);
		if(strlen($_POST['img'])!=0)
		{
			$str_img = str_replace( $home_url["option_value"], '', $_POST['img'] );
			$mydata['category_img']=$str_img;
		}
		print_r($mydata);
		$category->category_update($mydata,$id);
		$data=array(
			'link_slug'=>$slug,
			'link_type'=>'category',
			'link_tableid'=>'1',
			'link_createdat'=>date('Y-m-d H:i:s'),
			'link_createdby'=>$_SESSION['user_id'],
			'link_updatedat'=>date('Y-m-d H:i:s'),
			'link_updatedby'=>$_SESSION['user_id'],
			'link_status'=>$_POST['status']
		);
		$link->link_update($data,$id);
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