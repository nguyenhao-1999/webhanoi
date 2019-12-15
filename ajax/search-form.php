<?php 
// gợi ý từ khóa tìm kiếm 
$keyword =  $_POST['keyword'];
if ($keyword != "") {
	// Kiểm tra nếu tồn tại thì mới load thư viện
	require_once("../Config.php");
	require_once('../system/Database.php');
	require_once('../system/load.php');  

	//tiến truy vấn dữ liệu xem có tồn tại hay không 
	$category= loadModelAjax('category');
	$product= loadModelAjax('product');

	$search_category = $category->search_category($keyword);
	$search_product = $product->search_product($keyword);
	$search = '';
	if ($search_category != FALSE) 
	{
		foreach ($search_category as $key => $value) {
			$search .= '<li class="page">Tìm trong <a href="'.$value['category_slug'].'.html">'.$value["category_name"].'</a></li>';
		}
	}
	if ($search_product != FALSE) 
	{
		foreach ($search_product as $key => $value) {
			$search .= '<li><a href="'.$value['product_slug'].'.html"><div class="media"><div class="media-left"><img src="public/images/products/'.$value['product_img'].'" class="media-object"></div><div class="media-body"><h4 class="media-heading name-prd">'.$value['product_name'].'</h4><p class="pri-item">'.$value['product_pricesale'].'</sup></p></div></div></a></li>';
		}
	}
	

	// gửi về để xữ lý
	$err['success'] = $search;
	echo json_encode($err,true);
    die();

}


?>