<?php 
class Category extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table=$this->TableName('category');
	}
	function category_parentid($parentid=0,$id=0)
	{
		if($id!=0)
		{
			$sql="SELECT * FROM $this->table WHERE category_status='1' AND category_parentid='$parentid'AND category_trademark='$id'";
		}
		else
		{
			$sql="SELECT * FROM $this->table WHERE category_status='1' AND category_parentid='$parentid' ";
		}
		return $this->QueryAll($sql);
	}
	function category_trademark($id=0)
	{
		$sql="SELECT * FROM $this->table WHERE category_trademark='$id'";
		return $this->QueryOne($sql);
	}
	function category_rowslug($slug)
	{
		$sql="SELECT * FROM $this->table WHERE category_status='1' AND category_slug='$slug'";
		return $this->QueryOne($sql);
	}
	function category_rowid($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE category_status='1' AND category_id='$parentid'";
		return $this->QueryOne($sql);
	}
	function category_listid($id)
	{
		$arr=array();
		$arr[]=$id;
		$list1=$this->category_parentid($id);
		if(count($list1))
		{
			foreach($list1 as $row1)
			{
				$arr[]= $row1['category_id'];
				$list2=$this->category_parentid($row1['category_id']);
				if(count($list2))
				{
					foreach($list2 as $row2)
					{
						$arr[]= $row2['category_id'];
						$list3=$this->category_parentid($row2['category_id']);
						if(count($list3))
						{
							foreach($list3 as $row3)
							{
								$arr[]= $row3['category_id'];
							}
						}
					}
				}
			}
		}
		return $arr;
	}
	function category_of($id)
	{
		$sql="SELECT*FROM $this->table WHERE category_id = $id AND category_status = 1 ";
		return $this->QueryOne($sql);
	}

	function search_category($keyword){
		$sql="SELECT * FROM $this->table WHERE category_name LIKE '%$keyword%' AND category_status = 1  ORDER BY category_id DESC LIMIT 3";
		if($this->QueryCount($sql)>0)
		{
			return $this->QueryAll($sql);
		}
		else
		{
			return FALSE;
		}
	}
	function get_category_by_id($id_string)
	{
		$strin = implode(', ', $id_string);
		$sql="SELECT * FROM $this->table WHERE category_id IN ($strin);";
		return $this->QueryAll($sql);
	}
	function get_categorys($id)
	{
		$sql = "SELECT * FROM $this->table WHERE category_parentid = $id AND category_status = '1' ORDER BY category_id DESC LIMIT 5";
		return $this->QueryAll($sql);
	}
	function category_name_by_id($id)
	{
		$sql = " SELECT * FROM $this->table WHERE category_status = '1' AND category_id='$id' ";
		return $this->QueryOne($sql);
	}
}
?>
