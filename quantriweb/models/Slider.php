<?php 
class Slider extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('slider');
	}
	function slider_list($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE slider_status!='0' ORDER BY slider_createdat DESC";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE slider_status='0'ORDER BY slider_createdat DESC";
		}
		return $this->QueryAll($sql);
	}
	function slider_count()
	{
		$sql="SELECT * FROM nvh_slider";
		return $this->QueryCount($sql);
	}
	function slider_rowid($id)
	{
		$sql="SELECT * FROM $this->table WHERE slider_id='$id'";
		return $this->QueryOne($sql);
	}
	function slider_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE slider_id='$id'";
		$this->QueryNoResult($sql);
	}
	function slider_insert($data)
	{
		$strf='';
		$strv='';
		foreach($data as $f=>$v)
		{
			$strf.=$f.", ";
			$strv.="'$v', ";
		}
		$strf=rtrim(rtrim($strf),',');
		$strv=rtrim(rtrim($strv),',');
		$sql="INSERT INTO $this->table($strf) VALUES($strv)";
		$this->QueryNoResult($sql);

	}
	function slider_exists_name($name,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE slider_name='$name'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE slider_name='$name'AND slider_id!='$id'";
		}
		if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
	}
	function slider_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE slider_id='$id'";
		$this->QueryNoResult($sql);
	}
}
?>