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

if(isset($_POST['DANGNHAP']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($auth->auth_check($username)==true)
	{
		$user=$auth->auth_guard($username,sha1($password));
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
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Matrix Admin</title><meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../public/Admin/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../public/Admin/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="../public/Admin/css/matrix-login.css" />
	<link href="../public/Admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
	<div id="loginbox">            
		<form id="loginform" class="form-vertical" action="" method="POST">
			<div class="control-group normal_text"> <h3><img style="width: 50%;" src="../public/Admin/img/logo.png" alt="Logo" /></h3></div>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_lg"><i class="icon-user"> </i></span><input value="<?php if($username) echo $username; else echo $username=""; ?>" name="username" type="text" placeholder="Tài khoảng" />
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_ly"><i class="icon-lock"></i></span><input value="<?php if($password) echo $password; ?>" type="password" name="password" placeholder="Mật khẩu" />
					</div>
				</div>
			</div>
				<div class="text-center">
					<?php 
					if(isset($error_username))
					{
						echo "<span class='label label-important'>".$error_username."</span>";
					}
					if(isset($error_password))
					{
						echo "<span class='label label-important'>".$error_password."</span>";
					}
					?>
				</div>
			<div class="form-actions">
				<span class="pull-right"><button type="submit" name="DANGNHAP" class="btn btn-success" />Đăng Nhập</button></span>
			</div>
		</form>
	</div>

	<script src="../public/Admin/js/jquery.min.js"></script>  
	<script src="../public/Admin/js/matrix.login.js"></script> 
	<script src="../public/Admin/js/matrix.interface.js"></script> 
</body>

</html>
