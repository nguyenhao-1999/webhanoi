<?php 
class Cart
{
	function insert($data)
	{
		if(!isset($_SESSION['cart']))
		{
			$acat[]=$data;//mang 2 chieu
			$_SESSION['cart']=$acat;
		}
		else
		{
			$cart=$_SESSION['cart'];
			if($this->check_product($cart,$data)==true)
			{
				$cart= $this->cart_update_qty($cart,$data);
			}
			else
			{
				$cart[]=$data;
			}
			$_SESSION['cart']=$cart;
		}
	}
	function check_product($cart,$data)
	{
		foreach($cart as $r)
		{
			if($r['id']==$data['id'])
			{
				return true;
			}
		}
		return false;
	}
	function cart_update_qty($cart,$data)
	{
		foreach($cart as $key=>$r)
		{
			if($r['id']==$data['id'])
			{
				$cart[$key]['qty']+=$data['qty'];
			}
		}
		return $cart;
	}
	function cart_content()
	{
		if(isset($_SESSION['cart']))
		{
			return $_SESSION['cart'];
		}
		return NULL;
	}
	function update($data)
	{
		$cart=$_SESSION['cart'];
		foreach($data as $key=>$item)
		{
			foreach ($cart as $keycart => $rcart) {
				if($data[$key]['id']==$cart[$keycart]['id'])
				{
					if($data[$key]['qty']<=0)
					{
						unset($cart[$keycart]);
					}
					else
					{
						$cart[$keycart]['qty']=$data[$key]['qty'];
					}
				}
			}
		}
		$_SESSION['cart']=$cart;
	}
	function count_total()
	{
		if(!isset($_SESSION['cart']))
		{
			return 0;
		}
		else
		{
			$cart=$_SESSION['cart'];
			return count($cart);
		}
	}
	function count_toltal_product()
	{
		if(!isset($_SESSION['cart']))
		{
			return 0;
		}
		else
		{
			$cart=$_SESSION['cart'];
			$number=0;
			foreach($cart as $item)
			{
				$number+=$item['id'];
			}
			return $number;
		}
	}
}

?>