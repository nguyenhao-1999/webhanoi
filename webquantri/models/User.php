<?php 
class User extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('user');
	}
	function user_list($page='index',$access=-1)
	{
		if($access==-1)
		{
			$sql="SELECT * FROM $this->table WHERE user_status!='0'";
			if($page!='index')
			{
				$sql="SELECT * FROM $this->table WHERE user_status='0'";
			}
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE user_status!='0' AND user_access='$access'";
			if($page!='index')
			{
				$sql="SELECT * FROM $this->table WHERE user_status='0'AND user_access='$access'";
			}
		}
		return $this->QueryAll($sql);
	}
	function user_count()
	{
		$sql="SELECT * FROM nvh_user";
		return $this->QueryCount($sql);
	}
	function user_rowid($id,$access=-1)
	{
		$sql="SELECT * FROM $this->table WHERE user_id='$id'";
		if($access!=-1)
		{
			$sql="SELECT * FROM $this->table WHERE user_id='$id'AND user_access='$access'";
		}
		return $this->QueryOne($sql);
	}
	function user_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE user_id='$id'";
		$this->QueryNoResult($sql);
	}
	function user_insert($data)
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
		echo $sql;
		$this->QueryNoResult($sql);

	}
	function user_exists_name($username,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE user_username='$username'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE user_username='$username'AND user_id!='$id'";
		}
		if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
	}
	function user_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE user_id='$id'";
		$this->QueryNoResult($sql);
	}
}
?>