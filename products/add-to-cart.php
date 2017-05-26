<?php
	if (isset($_COOKIE['username']))
	{
?>
<?php
	if(isset($_POST['id']) &&
	   isset($_POST['qty'])
	)
	{
		include 'config.php';
		session_start();
		$id = $_POST['id'];
		$quantity = $_POST['qty'];
		
		$getstock = "SELECT stock FROM products WHERE itemID = $id;";
		$getres = "SELECT reserved FROM products WHERE itemID = $id;";
		if (!mysqli_query($conn,$getstock) || !mysqli_query($conn,$getres))
		{
			echo("Error description: " . mysqli_error($conn));
		}
		$execute = $conn -> query($getstock);
		$stocks = $execute -> fetch_assoc();
		$execute = $conn -> query($getres);
		$reserved = $execute -> fetch_assoc();
		$temp1 = $stocks['stock'] - $quantity;
		$temp2 = $reserved['reserved'] + $quantity;
		$query = "UPDATE products SET stock = ".$temp1.", reserved = ".$temp2." WHERE itemID = $id ;";
		if (!mysqli_query($conn,$query))
		{
			echo("Error description: " . mysqli_error($conn));
			
		}
		
		if ($conn -> query($query))
		{
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
		}else
		{
			echo "whoops";
		}
	}
?>

<?php 
	}else{header("Location: /IS310A/login/newLogin.php");}
?>
