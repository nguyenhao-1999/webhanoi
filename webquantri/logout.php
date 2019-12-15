<?php 	
session_start();
unset($_SESSION['user_admin']);
unset($_SESSION['user_id']);
unset($_SESSION['user_fullname']);
unset($_SESSION['user_img']);
session_destroy();//xóa toàn bộ session
require_once('../system/core.php');
redirect('login.php');
?>