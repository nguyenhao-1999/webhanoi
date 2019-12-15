<?php 
$contact=loadModel('contact');
$id=$_REQUEST['id'];
$row=$contact->contact_rowid($id);
if($row==null)
{
	set_flash('thongbao',['type'=>'danger','msg'=>'Mã liên hệ không tồn tại.']);
	redirect('index.php?option=contact&cat=trash');
}
else
{
	$contact->contact_delete($id);
	set_flash('thongbao',['type'=>'success','msg'=>'Xóa thành công']);
	redirect('index.php?option=contact&cat=trash');
}
?>