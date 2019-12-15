<?php 
$post=loadModel('post');
if(isset($_POST["THEM"]))
{
	if($post->post_exists_title($_POST['title']))
	{
		$slug=str_slug($_POST['title']);
		$mydata=array(
			'post_topid'=>$_POST['catid'],
			'post_title'=>$_POST['title'],
			'post_slug'=>$slug,
			'post_detail'=>$_POST['detail'],
			'post_type'=>'post',
			'post_metakey'=>$_POST['metakey'],
			'post_metadesc'=>$_POST['metadesc'],
			'post_createdat'=>date('Y-m-d H:i:s'),
			'post_createdby'=>$_SESSION['user_id'],
			'post_updatedat'=>date('Y-m-d H:i:s'),
			'post_updatedby'=>$_SESSION['user_id'],
			'post_status'=>$_POST['status']
		);
		if(strlen($_FILES['img']['name']))
		{
			$tmp_name=$_FILES['img']['tmp_name'];
			$hinh=$slug.".".get_duoi($_FILES['img']['name']);
			move_uploaded_file($tmp_name,'../public/images/post/'.$hinh);
			$mydata['post_img']=$hinh;
			$post->post_insert($mydata);
			set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
			redirect('index.php?option=post');

		}
		else
		{
			set_flash('thongbao',['type'=>'danger','msg'=>'Chưa chọn ảnh đại diện']);
			redirect('index.php?option=post&cat=insert');
		}
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tiêu đề bài viết đã tồn tại']);
		redirect('index.php?option=post&cat=insert');
	}
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_POST['id'];
	$row=$post->post_rowid($id);

	if($row==null)
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Mã bài viết không tồn tại']);
		redirect('index.php?option=post&cat=update');
	}
	else
	{
		if($post->post_exists_title($_POST['title'],$id))
		{
			$slug=str_slug(strip_tags($_POST['title']));
			$mydata=array(
				'post_topid'=>$_POST['catid'],
				'post_title'=>strip_tags($_POST['title']),
				'post_slug'=>$slug,
				'post_detail'=>$_POST['detail'],
				'post_type'=>'post',
				'post_metakey'=>$_POST['metakey'],
				'post_metadesc'=>$_POST['metadesc'],
				'post_updatedat'=>date('Y-m-d H:i:s'),
				'post_updatedby'=>$_SESSION['user_id'],
				'post_status'=>$_POST['status']
			);
			if(strlen($_FILES['img']['name']))
			{
				if(file_exists('../public/images/post/'.$row['post_img']))
				{
					unlink('../public/images/post/'.$row['post_img']);
				}
				$tmp_name=$_FILES['img']['tmp_name'];
				$hinh=$slug.".".get_duoi($_FILES['img']['name']);
				move_uploaded_file($tmp_name,'../public/images/post/'.$hinh);
				$mydata['post_img']=$hinh;
			}
			$post->post_update($mydata,$id);
			set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
			redirect('index.php?option=post');
		}
		else
		{
			set_flash('thongbao',['type'=>'danger','msg'=>'Tên tiêu đề đã tồn tại']);
			redirect('index.php?option=post&cat=update');
		}
	}

}
?>