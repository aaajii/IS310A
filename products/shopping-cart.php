<?php
	session_start();
	
	$result = implode(',',$_SESSION['cart']);
	
	$sql = "SELECT * FROM products WHERE itemID IN ($result)";
	session_destroy();
?>