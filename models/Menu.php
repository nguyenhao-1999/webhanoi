<?php 
class Menu extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('menu');
	}
	function menu_list($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE menu_position='mainmenu' AND menu_status='1' AND menu_parentid='$parentid'";
		return $this->QueryAll($sql);
	}
	function menu_row()
	{
		$sql="SELECT * FROM nvh_menu";
		return $this->QueryOne($sql);
	}
}
 ?>