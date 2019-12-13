<?php
function loadComponent($page=true)
{

	$link=loadModel('link');
	if($page==true)
	{
		if(!isset($_REQUEST['url']))
		{
			require_once('views/pages/home.php');
		}
		else
		{
			$link->link_index($_REQUEST['url']);
		}
	}
	/*else
	{
		if(isset($_REQUEST['option']))
		{
			$pathView.=$_REQUEST['option'].'/';
			if(isset($_REQUEST['cat']))
			{
				$pathView.=$_REQUEST['cat'].'.php';
			}
			else
			{
				$pathView.='index.php';
			}
		}
		else
		{
			$pathView.='dashboard/index.php';
		}
	}*/
	
	//require($pathView);
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