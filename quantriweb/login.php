<?php 
session_start();	
require_once('../Config.php');
require_once('../system/load.php');
require_once('../system/core.php');
require_once('../system/Database.php');
if(isset($_SESSION['user_admin']))
{
	redirect('index.php');
}
?>
<?php
$auth = loadModel('auth');
if(isset($_POST['login-sub']))
{
	$error = '';
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	
	if ( empty($username) || empty($password) ) {
		$error = "Cần nhập vào thông tin đăng nhập không được phép để trống";
	}else{
		if($auth->auth_check($username)==true)
		{
			$user = $auth->auth_guard($username,$password);
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
				$error_password ='Mật khẩu không chính xác';
			}
		}
		else
		{
			$error_username ='Tên đăng nhập không tồn tại';
		}
	}
}
?>
<!DOCTYPE html>
<html class="no-js" lang=""> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng Nhập - Trang Quản trị</title>
	<meta name="description" content="Ela Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
	<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
	<link rel="stylesheet" href="../public/admin/assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="../public/admin/assets/css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-dark">

	<div class="sufee-login d-flex align-content-center flex-wrap">
		<div class="container">
			<div class="login-content">
				<div class="login-logo">
					<a href="index.html">
						<img class="align-content" src="../public/images/logo.png" alt="">
					</a>
				</div>
				<div class="login-form">
					<form method="post">
						<div class="form-group">
							<label>Nhập vào tên đăng nhập</label>
							<input type="text" name="username" class="form-control" placeholder="Nhập vào tài khoảng" value="<?php if(isset($_POST['username'])){ echo $_POST['username'];} ?>">
						</div>
						<div class="form-group">
							<label>Nhập vào mật khẩu đăng nhập</label>
							<input type="password" class="form-control" name="password" placeholder="Nhập vào mật khẩu" value="<?php if(isset($_POST['password'])) { echo $_POST['password'];} ?>">
						</div>
						<button type="submit" name="login-sub" id="login-sub" class="btn btn-success btn-flat m-b-30 m-t-30">Đăng nhập</button>
						<?php if (!empty($error)) {
							echo '<div  class="alert alert-info">'.$error.'</div>';
						} ?>
						
						<fieldset class="form-group">
							<?php 	if(isset($error_username)){echo $error_username;} ?>
							<?php 	if(isset($error_password)){echo $error_password;} ?>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
	<script src="../public/admin/assets/js/main.js"></script>

</body>
</html>
