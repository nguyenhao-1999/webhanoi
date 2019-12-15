<?php 
class Orderdetail extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('orderdetail');
	}
	function orderdetail_list($orderid)
	{
		$sql="SELECT * FROM $this->table WHERE orderdetail_orderid='$orderid'";
		return $this->QueryAll($sql);
	}
}
?>