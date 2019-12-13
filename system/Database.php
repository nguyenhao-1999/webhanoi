<?php
class Database extends Config
{
	function __construct()
	{
		$this->conn=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		mysqli_set_charset($this->conn,"utf8");

	}
	function TableName($name)
	{
		return $this->dbprefix.$name;

	}
	function QueryOne($sql)
	{
		$result=mysqli_query($this->conn,$sql);
		$row=mysqli_fetch_assoc($result);
		return $row;
	}
	function QueryAll($sql)
	{
		$result=mysqli_query($this->conn,$sql);
		$a=array();
		while($row=mysqli_fetch_assoc($result))
		{
			$a[]=$row;
		}
		return $a;
	}
	function QueryNoResult($sql)
	{
		mysqli_query($this->conn,$sql);
	}
	function QueryCount($sql)
	{
		$result=mysqli_query($this->conn,$sql);
		$row=mysqli_num_rows($result);
		return $row;
	}
	function QueryInsertId($sql)
	{
		mysqli_query($this->conn,$sql);
		$row=mysqli_insert_id($this->conn);
		return $row;
	}
	function QueryCode($sql)
	{
		$max_order_id=0;
		$result=mysqli_query($this->conn,$sql);
		while($order_info =mysqli_fetch_array($result))
		{ 
			$max_order_id = isset($order_info['max_order_id'])?(int)$order_info['max_order_id'] : 0; 
		}
		mysqli_free_result($result);
		$max_order_id++; 
		return $max_order_id;
	}
}
?>