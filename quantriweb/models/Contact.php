<?php 
class Contact extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('contact');
	}
	function contact_list($page = 'index')
	{
		
		if($page == 'index')
		{
			$sql="SELECT * FROM $this->table WHERE contact_status='1' OR contact_status='2' ORDER BY contact_createdat DESC";
		}else{
			$sql="SELECT * FROM $this->table WHERE contact_status!='1' ORDER BY contact_createdat DESC";
		}
		return $this->QueryAll($sql);
	}
	function contact_count()
	{
		$sql="SELECT * FROM $this->table";
		return $this->QueryCount($sql);
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
		$sql = "UPDATE $this->table SET $strset WHERE contact_id='$id'";
		return $this->QueryNoResult($sql);
	}
	function contact_insert($mydata)
	{
		$strf='';
		$strv='';
		foreach($mydata as $f=>$v)
		{
			$strf.=$f.", ";
			$strv.="'".$v."', ";
		}
		$strf=trim(trim($strf),',');
		$strv=trim(trim($strv),',');
		$sql="INSERT INTO $this->table($strf) VALUES ($strv)";
		$this->QueryNoResult($sql);

	}
	function contact_exists_name($name,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE contact_name='$name'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE contact_name='$name'AND contact_id='$id'";
		}
		if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
	}
	function contact_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE contact_id='$id'";
		return $this->QueryNoResult($sql);
	}
}
?>