<?php 
class Post extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('post');
	}
	function post_rowslug($slug,$type='post')
	{
		$sql="SELECT * FROM $this->table WHERE post_slug='$slug' AND post_status='1' AND post_type='$type'";
		return $this->QueryOne($sql);
	}
	function post_list($first,$limit)
	{
		$sql="SELECT * FROM $this->table WHERE post_status='1' AND post_type='post' ORDER BY post_createdat DESC LIMIT $first,$limit" ;
		return $this->QueryAll($sql);
	}
	function post_count()
	{
		$sql="SELECT * FROM $this->table WHERE post_status='1'";
		return $this->QueryCount($sql);
	}
	function post_topic($topicid,$first,$limit)
	{
		$sql="SELECT * FROM $this->table WHERE post_status='1' AND post_type='post'AND post_topid='$topicid' ORDER BY post_createdat DESC LIMIT $first,$limit" ;
		return $this->QueryAll($sql);
	}
	function post_topicid($topicid,$first,$limit)
	{
		$strin=implode($topicid,',');
		$sql="SELECT * FROM $this->table WHERE post_status='1' AND post_topid IN($strin) AND post_type='post' LIMIT $first,$limit";
		return $this->QueryAll($sql);
	}
	function post_topic_count($topicid)
	{
		$sql="SELECT * FROM $this->table WHERE post_status='1' AND post_topid='$topicid'";
		return $this->QueryCount($sql);
	}
	function post_topic_count_atopic($topicid)
	{
		$strin=implode($topicid,',');
		$sql="SELECT * FROM $this->table WHERE post_status='1' AND post_topid IN($strin)  AND post_type='post'";
		return $this->QueryCount($sql);
	}
	function get_posts_by_id($id,  $limit)
	{
		$sql="SELECT * FROM $this->table WHERE post_status='1' AND post_topid = '$id' AND post_type = 'post' ORDER BY post_id DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function post_orther($topicid,$id,$limit)
	{
		$sql="SELECT * FROM $this->table WHERE post_status='1' AND post_type='post' AND post_id!='$id' AND post_topid='$topicid' ORDER BY post_createdat DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function post_search($keyword,$type='post')
	{
		$sql="SELECT * FROM $this->table WHERE (post_title like '%$keyword%' OR post_metakey like '%$keyword%' OR post_detail like '%$keyword%'OR post_metadesc like '%$keyword%') AND post_status='1' AND post_type='$type' ORDER BY post_createdat DESC";
		if($this->QueryCount($sql)>0)
		{  
			return $this->QueryAll($sql);
		}
		else
		{
			return FALSE;
		}
	}
	function get_post_by_id($id_string)
	{
		$strin = implode(', ', $id_string);
		$sql="SELECT * FROM $this->table WHERE post_id IN ($strin);";
		return $this->QueryAll($sql);
	}
}


?>