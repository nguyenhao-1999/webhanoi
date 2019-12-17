<?php 
class Link extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('link');
	}
	function link_list($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE link_status!='0' ORDER BY link_createdat DESC";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE link_status='0'ORDER BY link_createdat DESC";
		}
		return $this->QueryAll($sql);
	}
	function link_count()
	{
		$sql="SELECT * FROM nvh_link";
		return $this->QueryCount($sql);
	}
	function link_rowid($id)
	{
		$sql="SELECT * FROM $this->table WHERE link_id='$id'";
		return $this->QueryOne($sql);
	}
	function link_rowslug($slug)
	{
		$sql="SELECT * FROM $this->table WHERE link_slug='$slug'";
		return $this->QueryOne($sql);
	}
	function link_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE link_id='$id'";
		$this->QueryNoResult($sql);
	}
	function link_insert($data)
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
	function link_exists_name($name,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE link_name='$name'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE link_name='$name'AND link_id!='$id'";
		}
		if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
	}
	function link_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE link_slug='$id'";
		$this->QueryNoResult($sql);
	}
}
?>