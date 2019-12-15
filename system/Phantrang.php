<?php 
class Phantrang
{
	function pageCurrent()
	{
		$page=1;
		if(isset($_REQUEST['page']))
		{
			$page=$_REQUEST['page'];
		}
		return $page;
	}
	function pageFirst($current,$limit)
	{
		return ($current-1)*$limit;
	}
	function pageLink($total,$current,$limit,$url)
	{
		$pageNumber=ceil($total/$limit);
		$pageLink='';
		/*for($i=1;$i<=$pageNumber;$i++)
		{
			$pageLink.='<li class="page-item">';
			$pageLink.=' <a class="page-link" href="'.$url.'&page='.$i.'">'.$i.'</a> ';
			$pageLink.='</li>';
		}*/
		if($current==1)
		{
			$pageLink.='<li class="page-item"><a class="page-link">Trang đầu </a></li>';
			$pageLink.='<li class="page-item"><a class="page-link">Trước </a></li>';
		}
		else
		{
			$pageLink.='<li class="page-item"><a class="page-link" href="'.$url.'">Trang đầu </a></li>';
			$pageLink.='<li class="page-item"><a class="page-link" href="'.$url.'?page='.($current-1).'">Trước </a></li>';
		}
		if($current<=3)
		{
			for($i=1;($i<=5) and ($i<=$pageNumber);$i++)
			{
				if($i==$current)
				{
					$pageLink.='<li class="page-item">';
					$pageLink.=' <a class="page-link">'.$i.'</a> ';
					$pageLink.='</li>';
				}
				else
				{
					$pageLink.='<li class="page-item">';
					$pageLink.=' <a class="page-link" href="'.$url.'?page='.$i.'">'.$i.'</a> ';
					$pageLink.='</li>';
				}
			}
		}
		else
		{
			if($pageNumber >=$current+2)
			{
				for($i=$current-2;($i<=$current+2) and($i<=$pageNumber);$i++)
				{
					if($i==$current)
					{
						$pageLink.='<li class="page-item">';
						$pageLink.=' <a class="page-link">'.$i.'</a> ';
						$pageLink.='</li>';
					}
					else
					{
						$pageLink.='<li class="page-item">';
						$pageLink.=' <a class="page-link" href="'.$url.'?page='.$i.'">'.$i.'</a> ';
						$pageLink.='</li>';
					}
				}
			}
			else
			{
				for($i=$pageNumber-4;$i<=$pageNumber;$i++)
				{
					if($i>0)
					{
						if($i==$current)
						{
							$pageLink.='<li class="page-item">';
							$pageLink.=' <a class="page-link">'.$i.'</a> ';
							$pageLink.='</li>';
						}
						else
						{
							$pageLink.='<li class="page-item">';
							$pageLink.=' <a class="page-link" href="'.$url.'&page='.$i.'">'.$i.'</a> ';
							$pageLink.='</li>';
						}
					}
				}
			}

		}
		if($current==$pageNumber)
		{
			$pageLink.='<li class="page-item"><a class="page-link">Sau </a></li>';
			$pageLink.='<li class="page-item"><a class="page-link">Trang cuối </a></li>';
		}
		else
		{
			$pageLink.='<li class="page-item"><a class="page-link" href="'.$url.'?page='.($current+1).'">Sau </a></li>';
			$pageLink.='<li class="page-item"><a class="page-link" href="'.$url.'?page='.$pageNumber.'">Trang cuối </a></li>';
			
		}
		return $pageLink;
	}
}
?>