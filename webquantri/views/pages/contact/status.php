<?php 
$contact=loadModel('contact');
$id=$_REQUEST['id'];
$row=$contact->contact_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã liên hệ không tồn tại']);
	redirect('index.php?option=contact');
}
else
{
	$tt=($row['contact_status']==1)?2:1;
	$data= array(
		'contact_status'=>$tt,
		'contact_updatedat'=>date('Y-m-d H:i:s'),
		'contact_updatedby'=>$_SESSION['user_id']

	);
	$contact->contact_update($data,$id);
	set_flash('thongbao',['type'=>'success','msg'=>'Thay đổi trạng thái thành công']);
	redirect('index.php?option=contact');
}
?>