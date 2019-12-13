<?php 

class Link extends Database
{
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('link');
	}
	function link_list($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE link_position='mainmenu' AND menu_status='1' AND menu_parentid='$parentid'";
		return $this->QueryAll($sql);
	}
	function link_row($slug)
	{
		$sql="SELECT * FROM $this->table WHERE link_slug='$slug'";
		return $this->QueryOne($sql);
	}
	function link_index($slug)
	{
		  $product=loadModel('product');
			$item=$this->link_row($slug);
			if($item!=null)
    		{
                $type=$item['link_type'];
                switch ($type) {
                    case 'category':
                        require_once('views/pages/product-category.php');
                        break;
                    case 'topic':
                        $view=$this->post_topic($slug);
                        break;
                    case 'page':
                        $view=$this->post_page($slug);
                        break;
                    default:
                        require_once('views/pages/error404.php');
                        break;
                }
    		}
    		else
    		{
                $product_detail=$product->product_rowslug($slug);
                if($product_detail!=null)
                {
                    $view=$this->product_detail($slug);
                }
                else
                {
                    require_once('views/pages/error404.php');
                }
    		}
	}
}
 ?>