<?php 
class Topic extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('topic');
	}
	function topic_rowslug($slug)
	{
		$sql="SELECT * FROM $this->table WHERE topic_status='1' AND topic_slug='$slug'";
		return $this->QueryOne($sql);
	}
	function topic_list()
	{
		$sql="SELECT * FROM $this->table";
		return $this->QueryAll($sql);
	}
	
}
?>