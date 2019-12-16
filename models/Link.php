<?php 

class Link extends Database
{
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('link');
	}
	function link_list()
	{
		$sql="SELECT * FROM $this->table";
		return $this->QueryAll($sql);
	}
	function link_row($slug)
	{
		$sql="SELECT * FROM $this->table WHERE link_slug='$slug' AND link_status='1'";
		return $this->QueryOne($sql);
	}
	function link_index($url)
	{
		  $product=loadModel('product');
			$item=$this->link_row($url);
			if($item!=null)
    		{
                $type=$item['link_type'];
                switch ($type) {
                    case 'trademark':
                        $view='trademark.php';
                        break;
                    case 'product':
                        $view='product.php';
                        break;
                    case 'category':
                        $view='product-category.php';
                        break;
                    case 'topic':
                        $view='post.php';
                        break;
                    case 'page':
                        $view='page-category.php';
                        break;
                    case 'contact':
                        $view='contact.php';
                    case 'cart':
                        $view='cart.php';
                        break;
                    case 'order':
                        $view='order-addorder.php';
                        break;
                     case 'search':
                        $view='search.php';
                        break;
                    default:
                        $view='error404.php';
                        break;
                }
    		}
    		else
    		{
                $product_detail=$product->product_rowslug($url);
                if($product_detail!=null)
                {
                   $view='product-detail.php';
                }
                else
                {
                    $view='error404.php';
                }
    		}
            return $view;
	}
}
 ?>