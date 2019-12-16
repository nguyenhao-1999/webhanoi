<?php 
class Orderdetail extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('orderdetail');
	}

	function orderdetail_list($id)
	{
		$sql="SELECT * FROM $this->table WHERE orderdetail_orderid ='$id'ORDER BY orderdetail_id ASC";
		return $this->QueryAll($sql);
	}
}
?>