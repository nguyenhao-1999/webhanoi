<?php 
$contact=loadModel('contact');
$id=$_REQUEST['id'];
$row=$contact->contact_rowid($id);
if($row==null)
{
	set_flash('thongbao','Mã sản phẩm không tồn tại.');
	redirect('index.php?option=contact');
}
else
{
	$data= array(
		'contact_stateid'=> 0,
		'contact_updatedat'=>date('Y-m-d H:i:s'),
		'contact_updatedby'=>$_SESSION['user_id']
	);
	$contact->contact_update($data,$id);
	set_flash('thongbao','Xóa vào thùng rác thành công');
	redirect('index.php?option=contact');
}
?>