<?php
	if(isset($_POST['id']) &&
	   isset($_POST['name']) &&
	   isset($_POST['totals']) &&
	   isset($_POST['qty'])
	)
	{
		session_start();

		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$total = $_POST['totals'];
		$quantity = $_POST['qty'];
		
		if (empty($_SESSION['idList']) && 
			empty($_SESSION['nameList']) &&
			empty($_SESSION['totalList']) &&
			empty($_SESSION['quantityList'])
		   )
		{
			$_SESSION['idList'] = array();
			$_SESSION['nameList'] = array();
			$_SESSION['totalList'] = array();
			$_SESSION['quantityList'] = array();
		}
		array_push($_SESSION['idList'], $id);
		array_push($_SESSION['nameList'], $name);
		array_push($_SESSION['totalList'], $total);
		array_push($_SESSION['quantityList'], $quantity);
		echo "Item added to cart! <a href='shopping-cart.php'> Click here to view your cart! </a>";
	}
?>