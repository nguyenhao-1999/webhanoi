<?php 
$topic=loadModel('topic');
if(isset($_POST["THEM"]))
{
	if($topic->topic_exists_name($_POST['name']))
	{
		$slug=str_slug($_POST['name']);
		$mydata=array(
			'topic_name'=>$_POST['name'],
			'topic_slug'=>$slug,
			'topic_parentid'=>$_POST['parentid'],
			'topic_metakey'=>$_POST['metakey'],
			'topic_metadesc'=>$_POST['metadesc'],
			'topic_order'=>($_POST['order']+1),
			'topic_createdat'=>date('Y-m-d H:i:s'),
			'topic_createdby'=>$_SESSION['user_id'],
			'topic_updatedat'=>date('Y-m-d H:i:s'),
			'topic_updatedby'=>$_SESSION['user_id'],
			'topic_status'=>$_POST['status']
		);
		$topic->topic_insert($mydata);
		set_flash('thongbao',['type'=>'success','msg'=>'Thêm thành công']);
		redirect('index.php?option=topic');
	}
	else
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Tên chủ đề đã tồn tại']);
		redirect('index.php?option=topic&cat=insert');
	}
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_POST['id'];
	$row=$topic->topic_rowid($id);
	if($row==null)
	{
		set_flash('thongbao',['type'=>'danger','msg'=>'Mã chủ đề không tồn tại']);
		redirect('index.php?option=topic&cat=update');
	}
	else
	{
		if($topic->topic_exists_name($_POST['name'],$id))
		{
			$slug=str_slug(strip_tags($_POST['name']));
			$mydata=array(
				'topic_name'=>$_POST['name'],
				'topic_slug'=>$slug,
				'topic_parentid'=>$_POST['parentid'],
				'topic_metakey'=>$_POST['metakey'],
				'topic_metadesc'=>$_POST['metadesc'],
				'topic_order'=>($_POST['order']+1),
				'topic_createdat'=>date('Y-m-d H:i:s'),
				'topic_createdby'=>$_SESSION['user_id'],
				'topic_updatedat'=>date('Y-m-d H:i:s'),
				'topic_updatedby'=>$_SESSION['user_id'],
				'topic_status'=>$_POST['status']
			);
			$topic->topic_update($mydata,$id);
			set_flash('thongbao',['type'=>'success','msg'=>'Cập nhật thành công']);
			redirect('index.php?option=topic');
		}
		else
		{
			set_flash('thongbao',['type'=>'danger','msg'=>'Tên chủ đề đã tồn tại']);
			redirect('index.php?option=topic&cat=update');
		}
	}

}
?>