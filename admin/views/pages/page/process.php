<?php 
$option=loadModel('option');
$link=loadModel('link');
$home_url = $option->get_field(["option_name" => 'home_url', 'menu_status' => 1]);
$post=loadModel('post');
if(isset($_POST["THEM"]))
{
	if($post->post_exists_title($_POST['title']))
	{
		$str_img = str_replace( $home_url["option_value"], '', $_POST['img'] );
		$slug=str_slug($_POST['title']);
		$mydata=array(
			'post_title'=>$_POST['title'],
			'post_slug'=>$slug,
			'post_topid'=>$_POST['topid'],
			'post_img'=>$str_img,
			'post_type'=>'page',
			'post_detail'=>$_POST['detail'],
			'post_metakey'=>$_POST['metakey'],
			'post_metadesc'=>$_POST['metadesc'],
			'post_createdat'=>date('Y-m-d H:i:s'),
			'post_createdby'=>$_SESSION['user_id'],
			'post_updatedat'=>date('Y-m-d H:i:s'),
			'post_updatedby'=>$_SESSION['user_id'],
			'post_status'=>$_POST['status']
		);
		$data=array(
			'link_slug'=>$slug,
			'link_type'=>'post',
			'link_tableid'=>'1',
			'link_createdat'=>date('Y-m-d H:i:s'),
			'link_createdby'=>$_SESSION['user_id'],
			'link_updatedat'=>date('Y-m-d H:i:s'),
			'link_updatedby'=>$_SESSION['user_id'],
			'link_status'=>$_POST['status']
		);
		$post->post_insert($mydata);
		$link->link_insert($data);
		set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
		redirect('index.php?option=post');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên loại sản phẩm đã tồn tại']);
		redirect('index.php?option=post&cat=insert');
	}
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_POST['id'];
	$row=$post->post_rowid($id);
	$rowlink=$link->link_rowslug($row['post_slug']);
	if($post->post_exists_title($_POST['title'],$id))
	{
		$slug=str_slug($_POST['title']);
		$mydata=array(
			'post_title'=>$_POST['title'],
			'post_slug'=>$slug,
			'post_topid'=>$_POST['topid'],
			'post_type'=>'page',
			'post_detail'=>$_POST['detail'],
			'post_metakey'=>$_POST['metakey'],
			'post_metadesc'=>$_POST['metadesc'],
			'post_createdat'=>date('Y-m-d H:i:s'),
			'post_createdby'=>$_SESSION['user_id'],
			'post_updatedat'=>date('Y-m-d H:i:s'),
			'post_updatedby'=>$_SESSION['user_id'],
			'post_status'=>$_POST['status']
		);
		if(strlen($_POST['img'])!=0)
		{
			$str_img = str_replace( $home_url["option_value"], '', $_POST['img'] );
			$mydata['post_img']=$str_img;
		}
		$post->post_update($mydata,$id);
		$data=array(
			'link_slug'=>$slug,
			'link_type'=>'post',
			'link_tableid'=>'1',
			'link_createdat'=>date('Y-m-d H:i:s'),
			'link_createdby'=>$_SESSION['user_id'],
			'link_updatedat'=>date('Y-m-d H:i:s'),
			'link_updatedby'=>$_SESSION['user_id'],
			'link_status'=>$_POST['status']
		);
		$link->link_update($data,$rowlink['link_id']);
		set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
		redirect('index.php?option=post');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên loại sản phẩm đã tồn tại']);
		redirect('index.php?option=post&cat=update');
	}
}
?>