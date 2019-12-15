<?php 
class Option extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('option');
	}

	function get_inforwebsite($option)
	{
		// trường hợp rỗng
		if ($option["option_name"]) $option_name = "";
		if ($option["menu_status"]) $menu_status = 1;
		// không rỗi
		if ($option["option_name"]) $option_name = $option["option_name"];
		if ($option["menu_status"]) $menu_status = $option["menu_status"];

		// dòng truy vấn dữ liệu
		if ($option_name !="" && $menu_status !="") 
		{
			$sql="SELECT * FROM $this->table WHERE option_name='$option_name' AND option_status=$menu_status";
			$cuont = $this->QueryCount($sql);
			// có cả 2
			if ($cuont > 1) 
			{
				return $this->QueryAll($sql);
			}else{
				return $this->QueryOne($sql);
			}
		}
	}
	function option_insert($data)
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
	function option_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE option_name='$id'";
		$this->QueryNoResult($sql);
	}
}