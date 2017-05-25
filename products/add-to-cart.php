<?php
	if(isset($_POST['idList']) &&
	   isset($_POST['nameList']) &&
	   isset($_POST['totalList']) &&
	   isset($_POST['quantityList']) &&
	)
	{
		session_start();

		
		$_POST['idList']
		$_POST['nameList']
		$_POST['totalList']
		$_POST['quantityList']
		
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
		array_push($_SESSION['idList'], $row['itemID']);
		array_push($_SESSION['nameList'], $row['itemName']);
		array_push($_SESSION['totalList'], $_GET['price']);
		array_push($_SESSION['quantityList'], $_GET['qty']);
		echo "Item added to cart! <a href=''> Click here to view your cart! </a>";
	}
?>