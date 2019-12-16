<?php 
$order=loadModel('order');
if(isset($_POST["THEM"]))
{
	if($order->order_exists_name($_POST['name']))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'order_catid'=>$_POST['catid'],
			'order_name'=>$_POST['name'],
			'order_slug'=>$slug,
			'order_detail'=>$_POST['detail'],
			'order_number'=>$_POST['number'],
			'order_price'=>$_POST['price'],
			'order_price_sale'=>$_POST['pricesale'],
			'order_metakey'=>$_POST['metakey'],
			'order_metadesc'=>$_POST['metadesc'],
			'order_createdat'=>date('Y-m-d H:i:s'),
			'order_createdby'=>$_SESSION['user_id'],
			'order_updatedat'=>date('Y-m-d H:i:s'),
			'order_updatedby'=>$_SESSION['user_id'],
			'order_status'=>$_POST['status']
		);
		if(strlen($_FILES['img']['name']))
		{
			$tmp_name=$_FILES['img']['tmp_name'];
			$hinh=$slug.".".get_duoi($_FILES['img']['name']);
			move_uploaded_file($tmp_name,'../public/images/order/'.$hinh);
			$mydata['order_img']=$hinh;
			$order->order_insert($mydata);
			set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
			redirect('index.php?option=order');

		}
		else
		{
			set_flash('thongbao',['type'=>'danger','msg'=>'Chưa chọn ảnh đại diện']);
			redirect('index.php?option=order&cat=insert');
		}
	}
	else
	{
		set_flash('thongbao',['type'=>'success','msg'=>'Tên sản phẩm đã tồn tại']);
		redirect('index.php?option=order&cat=insert');
	}
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_POST['id'];
	$row=$order->order_rowid($id);
	if($order->order_exists_name($_POST['name'],$id))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'order_catid'=>$_POST['catid'],
			'order_name'=>$_POST['name'],
			'order_slug'=>$slug,
			'order_detail'=>$_POST['detail'],
			'order_number'=>$_POST['number'],
			'order_price'=>$_POST['price'],
			'order_price_sale'=>$_POST['pricesale'],
			'order_metakey'=>$_POST['metakey'],
			'order_metadesc'=>$_POST['metadesc'],
			'order_updatedat'=>date('Y-m-d H:i:s'),
			'order_updatedby'=>$_SESSION['user_id'],
			'order_status'=>$_POST['status']
		);
		if(strlen($_FILES['img']['name'])!=0)
		{
			if(file_exists('../public/images/order/'.$row['order_img']))
			{
				unlink('../public/images/order/'.$row['order_img']);
			}
			$tmp_name=$_FILES['img']['tmp_name'];
			$hinh=$slug.".".get_duoi($_FILES['img']['name']);
			move_uploaded_file($tmp_name,'../public/images/order/'.$hinh);
			$mydata['order_img']=$hinh;
		}
		$order->order_update($mydata,$id);
		set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
		redirect('index.php?option=order');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên sản phẩm đã tồn tại']);
		redirect('index.php?option=order&cat=update');
	}

}
?>