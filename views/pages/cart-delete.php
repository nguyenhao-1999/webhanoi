<?php 
$cart=loadClass('cart');
$listcart=$_SESSION['cart'];
$id=null;
if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
}
if($id==null)
{
	unset($_SESSION['cart']);
}
else
{
	foreach ($listcart as $key=>$item)
	{
		if($item['id']==$id)
		{
			unset($listcart[$key]);
		}
	}
	$_SESSION['cart']=$listcart;
}
set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
redirect('gio-hang.html');
?>