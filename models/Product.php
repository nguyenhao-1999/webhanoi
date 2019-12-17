<?php 
class Product extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('product');
	}
	function product_home_lastnew($limit=4)
	{
		$sql="SELECT * FROM $this->table WHERE product_status='1' ORDER BY product_createdat DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function product_list_all()
	{
		$sql="SELECT * FROM $this->table WHERE product_status='1'";
		return $this->QueryAll($sql);
	}
	function product_list($limit=4)
	{
		$sql="SELECT * FROM $this->table WHERE product_status='1'ORDER BY RAND() DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function product_promotion($limit=4)
	{
		$sql="SELECT * FROM $this->table WHERE product_status='1' AND product_pricesale>0 ORDER BY (product_price-product_pricesale) DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function product_all_list($sort,$first,$limit)
	{
		$sort_f=$sort['order'];
		$sort_by=$sort['orderby'];
		$sql="SELECT * FROM $this->table WHERE product_status='1' ORDER BY $sort_f $sort_by LIMIT $first,$limit";
		return $this->QueryAll($sql);
	}
	function product_all_count()
	{
		$sql="SELECT * FROM $this->table WHERE product_status='1'";
		return $this->QueryCount($sql);
	}
	function product_category($acat)
	{
		$strin=implode($acat,',');
		$sql="SELECT * FROM $this->table WHERE product_status='1' AND product_catid IN($strin)";
		return $this->QueryAll($sql);
	}
	function product_category_home($acat,$limit=4)
	{
		$strin=implode($acat,',');
		$sql="SELECT * FROM $this->table WHERE product_status='1' AND product_catid IN($strin) ORDER BY product_createdat DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function product_category_count($acat)
	{
		$strin=implode($acat,',');
		$sql="SELECT * FROM nvh_product WHERE product_status='1' AND product_catid IN($strin)";
		return $this->QueryCount($sql);
	}
	function product_rowslug($slug)
	{
		$sql="SELECT * FROM $this->table WHERE product_status='1' AND product_slug='$slug'";
		return $this->QueryOne($sql);
	}
	function product_orther($acat,$id,$limit)
	{
		$strin=implode($acat,',');
		$sql="SELECT * FROM $this->table WHERE product_status='1' AND product_catid IN($strin) AND product_id!='$id' ORDER BY product_createdat DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function product_rowid($id)
	{
		$sql="SELECT * FROM $this->table WHERE product_id='$id'";
		return $this->QueryOne($sql);
	}
	function product_search($keyword,$limit=16)
	{
		$sql="SELECT * FROM $this->table WHERE (product_name like '%$keyword%' OR product_metakey like '%$keyword%' OR product_detail like '%$keyword%'OR product_metadesc like '%$keyword%') AND product_status='1' ORDER BY product_createdat DESC LIMIT $limit";
		if($this->QueryCount($sql)>0)
		{
			return $this->QueryAll($sql);
		}
		else
		{
			return FALSE;
		}
	}
	function product_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE product_id='$id'";
		$this->QueryNoResult($sql);
	}
	function product_relate($catid, $not, $limit = 6,$status = 1)
	{
		$sql = "SELECT * FROM $this->table WHERE  product_id NOT IN ('$not') AND product_status = $status AND product_catid = $catid ORDER BY product_id DESC  LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function search_product($keyword){
		$sql="SELECT * FROM $this->table WHERE (product_name like '%$keyword%' OR product_metakey like '%$keyword%' OR product_detail like '%$keyword%'OR product_metadesc like '%$keyword%') AND product_status='1' ORDER BY product_id DESC LIMIT 5";
		if($this->QueryCount($sql)>0)
		{
			return $this->QueryAll($sql);
		}
		else
		{
			return FALSE;
		}
	}
	function get_product_by_id($id_string)
	{
		$strin = implode(', ', $id_string);
		$sql="SELECT * FROM $this->table WHERE product_id IN ($strin);";
		return $this->QueryAll($sql);
	}
	function get_products($id)
	{
		$sql="SELECT * FROM $this->table WHERE product_catid = $id AND product_status = '1' ORDER BY product_id DESC LIMIT 10";
		return $this->QueryAll($sql);
	}
	
}
?>