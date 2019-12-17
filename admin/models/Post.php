<?php 
class Post extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('post');
	}
	function post_list($page='index',$type='post')
	{
		$sql="SELECT * FROM $this->table WHERE post_status!='0' AND post_type='$type'";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE post_status='0' AND post_type='$type'";
		}
		return $this->QueryAll($sql);
	}
	function post_rowid($id,$type='post')
	{
		$sql="SELECT * FROM $this->table WHERE post_id='$id' AND post_type='$type'";
		return $this->QueryOne($sql);
	}
	function post_update($data,$id,$type='post')
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE post_id='$id' AND post_type='$type'";
		return $this->QueryNoResult($sql);
	}
	function post_delete($id,$type='post')
	{
		$sql="DELETE FROM $this->table WHERE post_id='$id' AND post_type='$type'";
		$this->QueryNoResult($sql);
	}
	function post_insert($data)
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
		//echo $sql;
		return $this->QueryNoResult($sql);

	}
	function post_exists_title($title,$type='post',$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE post_title='$title'AND post_type='$type'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE post_title='$title'AND post_type='$type'AND post_id!='$id'";
		}
		if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
	}
}
?>