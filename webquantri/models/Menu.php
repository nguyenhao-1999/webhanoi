<?php 
class Menu extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('menu');
	}
	function menu_list($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE menu_status!='0' ORDER BY menu_createdat DESC";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE menu_status='0'ORDER BY menu_createdat DESC";
		}
		return $this->QueryAll($sql);
	}
	function menu_count()
	{
		$sql="SELECT * FROM nvh_menu";
		return $this->QueryCount($sql);
	}
	function menu_rowid($id)
	{
		$sql="SELECT * FROM $this->table WHERE menu_id='$id'";
		return $this->QueryOne($sql);
	}
	function menu_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE menu_id='$id'";
		$this->QueryNoResult($sql);
	}
	function menu_insert($data)
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
	function menu_exists_name($name,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE menu_name='$name'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE menu_name='$name'AND menu_id!='$id'";
		}
		if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
	}
	function menu_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE menu_id='$id'";
		$this->QueryNoResult($sql);
	}
}
?>