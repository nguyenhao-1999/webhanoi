<?php 
class Category extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('category');
	}
	function category_namecat($id)
	{
		$sql="SELECT * FROM $this->table WHERE category_id='$id' LIMIT 1";
		return $this->QueryOne($sql);
	}
	function category_nametrademark($id)
	{
		$sql="SELECT * FROM $this->table WHERE category_id='$id' LIMIT 1";
		$row=$this->QueryOne($sql);
		return $row['category_name'];
	}
	function category_list($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE category_status!='0'ORDER BY category_order ASC";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE category_status='0'ORDER BY category_order ASC";
		}
		return $this->QueryAll($sql);
	}
	function category_trademark($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE category_status!='0'ORDER BY category_order ASC";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE category_status='0'ORDER BY category_order ASC";
		}
		return $this->QueryAll($sql);
	}
	function category_list_menu($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE category_status!='0'ORDER BY category_order ASC";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE category_status='0'ORDER BY category_order ASC";
		}
		return $this->QueryAll($sql);
	}
	function category_count($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE category_status!='0'ORDER BY category_order ASC";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE category_status='0'ORDER BY category_order ASC";
		}
		return $this->QueryCount($sql);
	}
	function category_rowid($id)
	{
		$sql="SELECT * FROM $this->table WHERE category_id='$id'";
		return $this->QueryOne($sql);
	}
	function category_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE category_id='$id'";
		$this->QueryNoResult($sql);
	}
	function category_parentid($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE category_status='1' AND category_parentid='$parentid' ORDER BY category_order ASC";
		return $this->QueryAll($sql);
	}
	function category_exists_name($name,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE category_name='$name'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE category_name='$name'AND category_id!='$id'";
		}
		if(count($this->QueryAll($sql)))
		{
			return FALSE;
		}
		return TRUE;
	}
	function category_insert($data)
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
	function category_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE category_id='$id'";
		$this->QueryNoResult($sql);
	}
}
?>