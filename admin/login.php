<?php 
session_start();	
require_once('../Config.php');
require_once('../system/load.php');
require_once('../system/core.php');
require_once('../system/Database.php');
$auth=loadModel('auth');
if(isset($_SESSION['user_admin']))
{
	redirect('index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Đăng nhập hệ thống</title>

	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/css/all.min.css">
	<link rel="stylesheet" href="../public/css/layoutadmin.css">
	<link rel="stylesheet" href="../public/css/login.css">
	<script src="../public/js/jquery-3.3.1.min.js" ></script>
	<script src="../public/js/popper.min.js" ></script>
	<script src="../public/js/bootstrap.min.js" ></script>
</head>
<body>
	<?php
	if(isset($_POST['DANGNHAP']))
	{
		$username=$_POST['username'];
		$password=sha1($_POST['password']);
		if($auth->auth_check($username)==true)
		{
			$user=$auth->auth_guard($username,$password);
			if($user!=FALSE)
			{
					//Đăng nhập thành công
				$_SESSION['user_admin']=$username;
				$_SESSION['user_id']=$user['user_id'];
				$_SESSION['user_fullname']=$user['user_fullname'];
				$_SESSION['user_img']=$user['user_img'];
				redirect('index.php');
			}
			else
			{
				$error_password='Mật khẩu không chính xác';
			}
		}
		else
		{
			$error_username='Tên đăng nhập không tồn tại';
		}
	}
	?>
		<form action="" method="post">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng Nhập</label>
				<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Quên mật khẩu</label>
				<div class="login-form">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">TÊN ĐĂNG NHẬP </label>
							<input  id="user" type="text" name="username"  class=" form-control input">
						</div>
						<div class="group">
							<label for="pass" class="label">MẬT KHẨU</label>
							<input name="password" id="pass" type="password" class=" form-control input " data-type="password">
						</div>
						<div class="group">
							<input type="submit" name="DANGNHAP" class="button" value="ĐĂNG NHẬP">
						</div>
						<fieldset class="form-group">
							<?php 
								if(isset($error_username))
							{
								echo "<span class='text-danger'>".$error_username."</span>";
							}
							if(isset($error_password))
							{
								echo "<span class='text-danger'>".$error_password."</span>";
							}
							?>
						</fieldset>
						<div class="hr"></div>
					</div>
					<div class="for-pwd-htm">
						<div class="group">
							<label for="user" class="label">Username or Email</label>
							<input id="user" type="text" class="input">
						</div>
						<div class="group">
							<input type="submit" class="button" value="Reset Password">
						</div>
						<div class="hr"></div>
					</div>
				</div>
			</div>
		</div>
	</form>
	</form>
</body>
</html>




