<?php 
class Option extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('option');
	}
	/*function menu_list($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE menu_position='mainmenu' AND menu_status='1' AND menu_parentid='$parentid'";
		return $this->QueryAll($sql);
	}
	function menu_row()
	{
		$sql="SELECT * FROM nvh_menu";
		return $this->QueryOne($sql);
	}*/

	/*function get_inforwebsite($option){
		if (!$option[0] && !empty($option)) {
			$sql="SELECT * FROM $this->table WHERE option_name='$option' AND menu_status=$option AND option_address='$option'";
			// có cả 2
		}elseif (!empty($name) && empty($address)) {
			$sql="SELECT * FROM $this->table WHERE option_name='$option' AND menu_status=$option AND option_address='$option'";
			// chỉ có name
		}elseif(empty($name) && !empty($address)){
			$sql="SELECT * FROM $this->table WHERE option_name='$option' AND menu_status=$option AND option_address='$option'";
			// chỉ có address
		}
		return $this->QueryAll($sql);
	}*/
}