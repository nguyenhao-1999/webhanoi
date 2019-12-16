<?php 
$contact=loadModel('contact');
$id=$_REQUEST['id'];
$row=$contact->contact_rowid($id);
if($row==null)
{
	set_flash('thongbao','Mã sản phẩm không tồn tại.');
	redirect('index.php?option=contact&cat=trash');
}
else
{
	$data= array(
		'contact_stateid'=>1,
		'contact_updatedat'=>date('Y-m-d H:i:s'),
		'contact_updatedby'=>$_SESSION['user_id']
	);
	$contact->contact_update($data,$id);
	set_flash('thongbao','Khôi phục thành công');
	redirect('index.php?option=contact&cat=trash');
}
?>