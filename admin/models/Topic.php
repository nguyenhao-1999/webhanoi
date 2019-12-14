<?php 
class Topic extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('topic');
	}
	function topic_nametop($id)
	{
		$sql="SELECT * FROM $this->table WHERE topic_id='$id' LIMIT 1";
		$row=$this->QueryOne($sql);
		if($row==NULL)
		{
			return "untopic";
		}
		return $row['topic_name'];
	}
	function topic_list($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE topic_status!='0' ORDER BY topic_order ASC";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE topic_status='0' ORDER BY topic_order ASC";
		}
		return $this->QueryAll($sql);
	}
	function topic_rowid($id)
	{
		$sql="SELECT * FROM $this->table WHERE topic_id='$id'";
		return $this->QueryOne($sql);
	}
	function topic_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE topic_id='$id'";
		$this->QueryNoResult($sql);
	}
	function topic_insert($data)
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
	function topic_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE topic_id='$id'";
		return $this->QueryNoResult($sql);
	}

	function topic_exists_name($name,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE topic_name='$name'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE topic_name='$name'AND topic_id!='$id'";
		}
		if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
	}
}
?>