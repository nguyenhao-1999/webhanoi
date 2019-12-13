<?php 
class Slider extends Database
{
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('slider');
	}
	function slider_list($position='slideshow')
	{
		$sql="SELECT * FROM $this->table WHERE slider_status='1' AND slider_position='$position' ORDER BY slider_order ASC";
		return $this->QueryAll($sql);
	}
}
 ?>