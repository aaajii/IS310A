<?php
	session_start();
	
	if (empty($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
	}
	array_push($_SESSION['cart'], $_GET['id']);
?>
<p>
	product was added succesfully!
	<a href="shopping-cart.php"> Click here to view your items</a>
</p>