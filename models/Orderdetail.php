<?php 
class Orderdetail extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('orderdetail');
	}
	function orderdetail_insert($data)
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
		$this->QueryNoResult($sql);
	}
}
?>