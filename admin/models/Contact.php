<?php 
class Contact extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('contact');
	}
	function contact_nametop($id)
	{
		$sql="SELECT * FROM $this->table WHERE contact_id='$id' LIMIT 1";
		$row=$this->QueryOne($sql);
		if($row==NULL)
		{
			return "uncontact";
		}
		return $row['contact_name'];
	}
	function contact_list($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE contact_status!='0'";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE contact_status='0'";
		}
		return $this->QueryAll($sql);
	}
	function contact_rowid($id)
	{
		$sql="SELECT * FROM $this->table WHERE contact_id='$id'";
		return $this->QueryOne($sql);
	}
	function contact_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE contact_id='$id'";
		$this->QueryNoResult($sql);
	}
	function contact_insert($data)
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
	function contact_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE contact_id='$id'";
		return $this->QueryNoResult($sql);
	}

	function contact_exists_name($name,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE contact_name='$name'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE contact_name='$name'AND contact_id!='$id'";
		}
		if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
	}
}
?>