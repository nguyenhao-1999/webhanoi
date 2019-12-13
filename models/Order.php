<?php 
class Order extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('order');
	}
	function order_insert($data)
	{
		$strf='';
		$strv='';
		foreach($data as $f=>$v)
		{
			$strf.=$f.',';
			$strv.="'".$v."', ";
		}
		$strf=rtrim(rtrim($strf),',');
		$strv=rtrim(rtrim($strv),',');
		$sql="INSERT INTO $this->table($strf) VALUES($strv)";
		return $this->QueryInsertId($sql);
	}
	function order_code()
	{
		$sql="SELECT MAX(order_id) as max_order_id FROM $this->table";
		return $this->QueryCode($sql);
	}
}
?>