<?php
function loadComponent($page=true)
{
	$view='views/pages/';
	if($page==true)
	{
		$link=loadModel('link');
		if(!isset($_REQUEST['option']))
		{
			$view.='/home.php';
		}
		else
		{
			if($_REQUEST['option']=='cart')
			{
				$view.=$_REQUEST['option'];
				if(isset($_REQUEST['cat']))
				{
					$view.='-'.$_REQUEST['cat'].'.php';
				}
				else
				{
					$view.='.php';
				}
			}
			else
			{
				$view.=$link->link_index($_REQUEST['option']);
			}
		}
	}
	else
	{
		if(isset($_REQUEST['option']))
		{
			$view.=$_REQUEST['option'].'/';
			if(isset($_REQUEST['cat']))
			{
				$view.=$_REQUEST['cat'].'.php';
			}
			else
			{
				$view.='index.php';
			}
		}
		else
		{
			$view.='dashboard/index.php';
		}
	}
	require_once($view);
}

function loadModel($name)
{
	$name=ucfirst(strtolower($name));
	$pathModel='models/'.$name.'.php';
	require_once($pathModel);
	return new $name;
}
function loadClass($name)
{
	$name=ucfirst(strtolower($name));
	$pathClass='system/'.$name.'.php';
	require_once($pathClass);
	return new $name;
}
function loadClassadmin($name)
{
	$name=ucfirst(strtolower($name));
	$pathClass='../system/'.$name.'.php';
	require_once($pathClass);
	return new $name;
}
?>