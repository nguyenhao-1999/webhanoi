<?php 
$contact=loadModel('contact');
$id=$_REQUEST['id'];
$row=$contact->contact_rowid($id);
if($row==null)
{
	set_flash('thongbao','Mã sản phẩm không tồn tại.');
	redirect('index.php?option=contact&cat=trash');
}else{
	//xóa hình
	if(file_exists('../public/images/contact/'.$row['contact_img']))
	unlink('../public/images/contact/'.$row['contact_img']);
	// xóa hình ảnh
	$contact->contact_delete($id);
	set_flash('thongbao','Xóa thành công');
	redirect("index.php?option=contact&cat=trash");
}