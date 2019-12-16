<?php 
class Order extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('order');
	}
	function order_namecat($id)
	{
		$sql="SELECT * FROM $this->table WHERE order_id='$id' LIMIT 1";
		$row=$this->QueryOne($sql);
		if($row==NULL)
		{
			return "unorder";
		}
		return $row['order_name'];
	}
	function order_list($page='index')
	{
		$sql="SELECT * FROM $this->table WHERE order_status!='0'";
		if($page!='index')
		{
			$sql="SELECT * FROM $this->table WHERE order_status='0'";
		}
		return $this->QueryAll($sql);
	}
	function order_rowid($id)
	{
		$sql="SELECT * FROM $this->table WHERE order_id='$id'";
		return $this->QueryOne($sql);
	}
	function order_update($data,$id)
	{
		$strset='';
		foreach($data as $f=>$v)
		{
			$strset.=$f."='$v',";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE order_id='$id'";
		$this->QueryNoResult($sql);
	}
	function order_parentid($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE order_status='1' AND order_parentid='$parentid' ORDER BY order_order ASC";
		return $this->QueryAll($sql);
	}
	function order_exists_name($name,$id=0)
	{
		if($id==0)
		{
			$sql="SELECT * FROM $this->table WHERE order_name='$name'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE order_name='$name'AND order_id!='$id'";
		}
		if(count($this->QueryAll($sql)))
		{
			return FALSE;
		}
		return TRUE;
	}
	function order_insert($data)
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
	function order_delete($id)
	{
		$sql="DELETE FROM $this->table WHERE order_id='$id'";
		$this->QueryNoResult($sql);
	}
}
?>