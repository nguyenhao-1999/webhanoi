<?php 
$user=loadModel('user');
if(isset($_POST["THEM"]))
{
	if($_POST['password']!=$_POST['password2'])
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Mật khẩu không khớp']);
		redirect('index.php?option=user&cat=insert');
	}
	else
	{
		if($user->user_exists_name($_POST['username']))
		{
			$mydata=array(
				'user_fullname'=>$_POST['fullname'],
				'user_username'=>$_POST['username'],
				'user_password'=>sha1($_POST['password']),
				'user_email'=>$_POST['email'],
				'user_gender'=>$_POST['gender'],
				'user_phone'=>$_POST['phone'],
				'user_access'=>$_POST['access'],
				'user_createdat'=>date('Y-m-d H:i:s'),
				'user_createdby'=>$_SESSION['user_id'],
				'user_updatedat'=>date('Y-m-d H:i:s'),
				'user_updatedby'=>$_SESSION['user_id'],
				'user_status'=>$_POST['status']
			);
			if(strlen($_FILES['img']['name']))
			{
				$tmp_name=$_FILES['img']['tmp_name'];
				$hinh=$slug.".".get_duoi($_FILES['img']['name']);
				move_uploaded_file($tmp_name,'../public/images/user/'.$hinh);
				$mydata['user_img']=$hinh;
			}
			$user->user_insert($mydata);
			set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
			redirect('index.php?option=user');
		}
		else
		{
			set_flash('thongbao',['type'=>'danger','msg'=>'Tên đăng nhập đã tồn tại']);
			redirect('index.php?option=user&cat=insert');
		}
	}
	
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_POST['id'];
	$row=$user->user_rowid($id,1);
	echo $row['user_password'];
	echo "<pre>";
	echo sha1($_POST['passwordcurrent']);
	if($row['user_password']!=sha1($_POST['passwordcurrent']))
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Mật khẩu hiện tại không đúng']);
		redirect('index.php?option=user&cat=update&id='.$id);
	}
	else
	{
		if($_POST['password']!=$_POST['password2'])
		{
			set_flash('thongbao',['type'=>'danger','msg'=>'Mật khẩu không khớp']);
			redirect('index.php?option=user&cat=update&id='.$id);
		}
		else
		{
			if($user->user_exists_name($_POST['username'],$id))
			{
				$mydata=array(
					'user_fullname'=>$_POST['fullname'],
					'user_username'=>$_POST['username'],
					'user_password'=>sha1($_POST['password']),
					'user_email'=>$_POST['email'],
					'user_gender'=>$_POST['gender'],
					'user_phone'=>$_POST['phone'],
					'user_access'=>$_POST['access'],
					'user_createdat'=>date('Y-m-d H:i:s'),
					'user_createdby'=>$_SESSION['user_id'],
					'user_updatedat'=>date('Y-m-d H:i:s'),
					'user_updatedby'=>$_SESSION['user_id'],
					'user_status'=>$_POST['status']
				);
				if(strlen($_FILES['img']['name']))
				{
					$tmp_name=$_FILES['img']['tmp_name'];
					$hinh=$slug.".".get_duoi($_FILES['img']['name']);
					move_uploaded_file($tmp_name,'../public/images/user/'.$hinh);
					$mydata['user_img']=$hinh;
				}
				$user->user_update($mydata,$id);
				set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
				redirect('index.php?option=user');
			}
			else
			{
				set_flash('thongbao',['type'=>'danger','msg'=>'Tên đăng nhập đã tồn tại']);
				redirect('index.php?option=user&cat=update&id='.$id);
			}
		}
	}

}
?>