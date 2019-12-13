<?php 
class Link extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('link');
	}
	function link_list($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE link_position='mainmenu' AND menu_status='1' AND menu_parentid='$parentid'";
		return $this->QueryAll($sql);
	}
	function link_row($slug)
	{
		$sql="SELECT * FROM $this->table WHERE link_slug='$slug'";
		return $this->QueryOne($sql);
	}
}
 ?>