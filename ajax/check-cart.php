<?php 
session_start(); 
require_once('../system/load.php');    
$count = loadClassAjax('cart');
$cart = $count->count_toltal_product();
if($cart != 0) 
{ 
	$err['success'] = $cart;
}
else
{
	$err['success'] = 0;
}
echo json_encode($err,true); 
die();
?>