<?php 
$slider=loadModel('slider');
if(isset($_POST["THEM"]))
{
	if($slider->slider_exists_name($_POST['name']))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'slider_name'=>$_POST['name'],
			'slider_link'=>$_POST['link'],
			'slider_position'=>$_POST['position'],
			'slider_createdat'=>date('Y-m-d H:i:s'),
			'slider_createdby'=>$_SESSION['user_id'],
			'slider_updatedat'=>date('Y-m-d H:i:s'),
			'slider_updatedby'=>$_SESSION['user_id'],
			'slider_status'=>$_POST['status']
		);
		if(strlen($_FILES['img']['name']))
		{
			$tmp_name=$_FILES['img']['tmp_name'];
			$hinh=$slug.".".get_duoi($_FILES['img']['name']);
			move_uploaded_file($tmp_name,'../public/images/slider/'.$hinh);
			$mydata['slider_img']=$hinh;
			$slider->slider_insert($mydata);
			set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
			redirect('index.php?option=slider');

		}
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên sản phẩm đã tồn tại']);
		redirect('index.php?option=slider&cat=insert');
	}
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_POST['id'];
	$row=$slider->slider_rowid($id);
	if($slider->slider_exists_name($_POST['name'],$id))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'slider_name'=>$_POST['name'],
			'slider_link'=>$_POST['link'],
			'slider_position'=>$_POST['position'],
			'slider_updatedat'=>date('Y-m-d H:i:s'),
			'slider_updatedby'=>$_SESSION['user_id'],
			'slider_status'=>$_POST['status']
		);
		if(strlen($_FILES['img']['name'])!=0)
		{
			if(file_exists('../public/images/slider/'.$row['slider_img']))
			{
				unlink('../public/images/slider/'.$row['slider_img']);
			}
			$tmp_name=$_FILES['img']['tmp_name'];
			$hinh=$slug.".".get_duoi($_FILES['img']['name']);
			move_uploaded_file($tmp_name,'../public/images/slider/'.$hinh);
			$mydata['slider_img']=$hinh;
		}
		$slider->slider_update($mydata,$id);
		set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
		redirect('index.php?option=slider');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên sản phẩm đã tồn tại']);
		redirect('index.php?option=slider&cat=update');
	}

}
?>