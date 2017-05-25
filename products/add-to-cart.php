<?php
	if(isset($_POST['id']) &&
	   isset($_POST['qty'])
	)
	{
		session_start();

		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$total = $_POST['totals'];
		$quantity = $_POST['qty'];
		
		if (empty($_SESSION['idList']) && 
			empty($_SESSION['quantityList'])
		   )
		{
			$_SESSION['idList'] = array();
			$_SESSION['quantityList'] = array();
		}
		array_push($_SESSION['idList'], $id);
		array_push($_SESSION['quantityList'], $quantity);
		echo "Item added to cart! <a href='shopping-cart.php'> Click here to view your cart! </a>";
	}
?>