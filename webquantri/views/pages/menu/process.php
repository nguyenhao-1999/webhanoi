<?php 
$menu=loadModel('menu');
$category=loadModel('category');
$topic=loadModel('topic');
$page=loadModel('post');
if(isset($_POST['THEMCATEGORY']))
{
	if(isset($_POST['category']))
	{
		$positon=$_POST['position'];
		$listcatid=$_POST['category'];
		foreach($listcatid as $id)
		{
			$rowcat=$category->category_rowid($id);
			$data_category=array(
				'menu_name'=>$rowcat['category_name'],
				'menu_type'=>'category',
				'menu_link'=>'index.php?option=product&cat='.$rowcat['category_slug'],
				'menu_tableid'=>$rowcat['category_id'],
				'menu_order'=>0,
				'menu_position'=>$positon,
				'menu_createdat'=>date('Y-m-d H:i:s'),
				'menu_createdby'=>$_SESSION['user_id'],
				'menu_updatedat'=>date('Y-m-d H:i:s'),
				'menu_updatedby'=>$_SESSION['user_id'],
				'menu_status'=>2
			);
			$menu->menu_insert($data_category);
		}
		set_flash('thongbao',['type'=>'success','msg'=>'Thêm menu thành công']);
		redirect('index.php?option=menu');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Chưa chọn loại sản phẩm cần thêm!']);
		redirect('index.php?option=menu');
	}
}
if(isset($_POST['THEMTOPIC']))
{
	if(isset($_POST['topic']))
	{
		$listtopicid=$_POST['topic'];
		foreach($listtopicid as $id)
		{
			$positon=$_POST['position'];
			$rowtopic=$topic->topic_rowid($id);
			$data_topic=array(
				'menu_name'=>$rowtopic['topic_name'],
				'menu_type'=>'topic',
				'menu_link'=>'index.php?option=product&cat='.$rowtopic['topic_slug'],
				'menu_tableid'=>$rowtopic['topic_id'],
				'menu_order'=>0,
				'menu_position'=>$positon,
				'menu_createdat'=>date('Y-m-d H:i:s'),
				'menu_createdby'=>$_SESSION['user_id'],
				'menu_updatedat'=>date('Y-m-d H:i:s'),
				'menu_updatedby'=>$_SESSION['user_id'],
				'menu_status'=>2
			);
			$menu->menu_insert($data_topic);
		}
		set_flash('thongbao',['type'=>'success','msg'=>'Thêm menu thành công']);
		redirect('index.php?option=menu');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Chưa chọn chủ đề cần thêm!']);
		redirect('index.php?option=menu');
	}
}

if(isset($_POST['THEMPAGE']))  
{   
	if(isset($_POST['page'])) 
	{ 
		$positon=$_POST['position'];
		$listpageid=$_POST['page']; 
		foreach($listpageid as $id) 
		{
			$rowpage = $page->post_rowid($id,'page'); 
			$data_topic=array( 
				'menu_name'=>$rowpage['post_title'], 
				'menu_type'=>'page', 
				'menu_link'=>'index.php?option=page&cat='.$rowpage['post_slug'], 
				'menu_tableid'=>$rowpage['post_id'], 
				'menu_order'=>0,
				'menu_position'=>$positon,
				'menu_createdat'=>date('Y-m-d H:i:s'), 
				'menu_createdby'=>$_SESSION['user_id'], 
				'menu_updatedat'=>date('Y-m-d H:i:s'),
				'menu_updatedby'=>$_SESSION['user_id'], 
				'menu_status'=>2 
			); 
			$menu->menu_insert($data_topic); 
		} 
		set_flash('thongbao',['type'=>'success','msg'=>'Thêm menu thành công']);
		redirect('index.php?option=menu');
	} 
	else 
	{ 
		set_flash('thongbao',['type'=>'danger','msg'=>'Chưa chọn trang đơn cần thêm!']);
		redirect('index.php?option=menu');
	} 
}  
if(isset($_POST['THEMCUSTOM'])) 
{ 
	if(isset($_POST['name'],$_POST['link'])&&strlen($_POST['name'])>0) 
	{ 
		$positon=$_POST['position'];
		$name=$_POST['name']; 
		$link=$_POST['link'];
		$data_custom=array( 
			'menu_name'=>$_POST['name'], 
			'menu_type'=>'custom', 
			'menu_link'=>$_POST['link'], 
			'menu_order'=>0, 
			'menu_position'=>$positon,
			'menu_createdat'=>date('Y-m-d H:i:s'), 
			'menu_createdby'=>$_SESSION['user_id'], 
			'menu_updatedat'=>date('Y-m-d H:i:s'), 
			'menu_updatedby'=>$_SESSION['user_id'],
			'menu_status'=>2
		); 
		$menu->menu_insert($data_custom); 
		set_flash('thongbao',['type'=>'success','msg'=>'Thêm menu thành công']);
		redirect('index.php?option=menu');
	} 
	else 
	{ 
		set_flash('thongbao',['type'=>'danger','msg'=>'Chưa nhập đủ thông tin!']);
		redirect('index.php?option=menu');	
	} 
} 

if(isset($_POST['CAPNHAT'])) 
{ 
	$id=$_POST['id']; 
	$row=$menu->menu_rowid($id); 
	$order=$_POST['order']+1; 
	$mydata=array( 
		'menu_parentid'=>$_POST['parentid'], 
		'menu_order'=>$order, 
		'menu_status'=>$_POST['status'], 
		'menu_updatedat'=>date('Y-m-d H:i:s'), 
		'menu_updatedby'=>$_SESSION['user_id'] 
	); 
	if($row['menu_type']=='custom')
	{ 
		$mydata['menu_name']=$_POST['name']; 
		$mydata['menu_link']=$_POST['link']; 
	} 
	$menu->menu_update($mydata,$id); 
	set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
	redirect('index.php?option=menu'); 
} 
?>