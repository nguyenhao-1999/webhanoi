<?php 
$product=loadModel('product');
if(isset($_POST["THEM"]))
{
	if($product->product_exists_name($_POST['name']))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'product_catid'=>$_POST['catid'],
			'product_name'=>$_POST['name'],
			'product_slug'=>$slug,
			'product_detail'=>$_POST['detail'],
			'product_number'=>$_POST['number'],
			'product_price'=>$_POST['price'],
			'product_price_sale'=>$_POST['pricesale'],
			'product_metakey'=>$_POST['metakey'],
			'product_metadesc'=>$_POST['metadesc'],
			'product_createdat'=>date('Y-m-d H:i:s'),
			'product_createdby'=>$_SESSION['user_id'],
			'product_updatedat'=>date('Y-m-d H:i:s'),
			'product_updatedby'=>$_SESSION['user_id'],
			'product_status'=>$_POST['status']
		);
		if(strlen($_FILES['img']['name']))
		{
			$tmp_name=$_FILES['img']['tmp_name'];
			$hinh=$slug.".".get_duoi($_FILES['img']['name']);
			move_uploaded_file($tmp_name,'../public/images/product/'.$hinh);
			$mydata['product_img'] = $hinh;
			$product->product_insert($mydata);
			set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
			redirect('index.php?option=product');

		}
		else
		{
			set_flash('thongbao',['type'=>'danger','msg'=>'Chưa chọn ảnh đại diện']);
			redirect('index.php?option=product&cat=insert');
		}
	}
	else
	{
		set_flash('thongbao',['type'=>'success','msg'=>'Tên sản phẩm đã tồn tại']);
		redirect('index.php?option=product&cat=insert');
	}
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_POST['id'];
	$row=$product->product_rowid($id);
	if($product->product_exists_name($_POST['name'],$id))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'product_catid'=>$_POST['catid'],
			'product_name'=>$_POST['name'],
			'product_slug'=>$slug,
			'product_detail'=>$_POST['detail'],
			'product_number'=>$_POST['number'],
			'product_price'=>$_POST['price'],
			'product_pricesale'=>$_POST['pricesale'],
			'product_metakey'=>$_POST['metakey'],
			'product_metadesc'=>$_POST['metadesc'],
			'product_updatedat'=>date('Y-m-d H:i:s'),
			'product_updatedby'=>$_SESSION['user_id'],
			'product_status'=>$_POST['status']
		);
		if(strlen($_FILES['img']['name'])!=0)
		{
			if(file_exists('../public/images/product/'.$row['product_img']))
			{
				unlink('../public/images/product/'.$row['product_img']);
			}
			$tmp_name=$_FILES['img']['tmp_name'];
			$hinh=$slug.".".get_duoi($_FILES['img']['name']);
			move_uploaded_file($tmp_name,'../public/images/product/'.$hinh);
			$mydata['product_img']=$hinh;
		}
		$product->product_update($mydata,$id);
		set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
		redirect('index.php?option=product');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên sản phẩm đã tồn tại']);
		redirect('index.php?option=product&cat=update');
	}

}
?>