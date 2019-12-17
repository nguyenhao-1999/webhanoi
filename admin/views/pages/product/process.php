<?php 
$option=loadModel('option');
$home_url = $option->get_field(["option_name" => 'home_url', 'menu_status' => 1]);
$product=loadModel('product');

if(isset($_POST["THEM"]))
{
	if($product->product_exists_name($_POST['name']))
	{
		$field1 = $_POST['informations_field1'];
		$field2 = $_POST['informations_field2'];
		$field_arr = [];
		foreach ($field1 as $key => $value) {
			$field_arr[] = [$value, $field2[$key]];
		}
		$j_field = json_encode( $field_arr, JSON_UNESCAPED_UNICODE );
		$slug=str_slug($_POST['name']);
		$str_img = str_replace( $home_url["option_value"], '', $_POST['img'] );
		$mydata=array(
			'product_catid'=>$_POST['catid'],
			'product_name'=>$_POST['name'],
			'product_slug'=>$slug,
			'product_detail'=>$_POST['detail'],
			'product_number'=>$_POST['number'],
			'product_price'=>$_POST['price'],
			'product_informations'=>$j_field,
			'product_pricesale'=>$_POST['pricesale'],
			'product_img'=>$str_img,
			'product_metakey'=>$_POST['metakey'],
			'product_metadesc'=>$_POST['metadesc'],
			'product_createdat'=>date('Y-m-d H:i:s'),
			'product_createdby'=>$_SESSION['user_id'],
			'product_updatedat'=>date('Y-m-d H:i:s'),
			'product_updatedby'=>$_SESSION['user_id'],
			'product_status'=>$_POST['status'],
		);
		$product->product_insert($mydata);
		set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
		redirect('index.php?option=product');

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
		$field1 = $_POST['informations_field1'];
		$field2 = $_POST['informations_field2'];
		$field_arr = [];
		foreach ($field1 as $key => $value) {
			$field_arr[] = [$value, $field2[$key]];
		}
		$j_field = json_encode( $field_arr, JSON_UNESCAPED_UNICODE );
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'product_catid'=>$_POST['catid'],
			'product_name'=>$_POST['name'],
			'product_slug'=>$slug,
			'product_detail'=>$_POST['detail'],
			'product_informations'=>$j_field,
			'product_number'=>$_POST['number'],
			'product_price'=>$_POST['price'],
			'product_pricesale'=>$_POST['pricesale'],
			'product_metakey'=>$_POST['metakey'],
			'product_metadesc'=>$_POST['metadesc'],
			'product_updatedat'=>date('Y-m-d H:i:s'),
			'product_updatedby'=>$_SESSION['user_id'],
			'product_status'=>$_POST['status'],
		);
		if(strlen($_POST['img'])!=0)
		{
			$str_img = str_replace( $home_url["option_value"], '', $_POST['img'] );
			$mydata['product_img']=$str_img;
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