<?php 
$cart=loadClass('cart');
$listid=$_POST['id'];//lấy danh sách id cần cập nhật
$listqty=$_POST['qty'];//lấy danh sách qty cần cập nhật
$data=array();
foreach ($listid as $key => $id) {
	$row['id']=$id;
	$row['qty']=$listqty[$key];
	$data[]=$row;
}
$cart->update($data);
set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
redirect('gio-hang.html');
?>