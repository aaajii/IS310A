<?php
	if( isset($_POST['name']) &&
		isset($_POST['dsc']) &&
		isset($_POST['price']) &&
		isset($_POST['brand']) &&
		isset($_POST['image'])
	  )
	{
		include 'config.php';
		$name = $_POST['name'];
		$desc = $_POST['dsc']; 
		$prce = $_POST['price'];
		$brnd = $_POST['brand'];
		$image = $_POST['image'];
		
		// Wait let me get the fucking ID of the current user ehehehe
		$user = $_COOKIE['username'];
		
		$IDquer = " SELECT userID 
					FROM  `users`
					WHERE  `username` LIKE '$user';";
		$IDresult = $conn -> query($IDquer);
		
		//Let me check if there are errors ahehe
		if (!mysqli_query($conn,$IDquer))
		{
		  echo("Error description: " . mysqli_error($conn));
		}
		$result = $IDresult -> fetch_assoc();
		//Okay let's continue
		
		
		//Now lets fucking insert that product into the sexy database baby
		$quer = "INSERT INTO `products` 
				 (`itemName`, `itemDescription`, `itemPrice`, `itemBrand`, `userID`, `itemImage`, `stock`, `reserved`) 
				 VALUES 
				 ('$name','$desc',$prce,'$brnd','".$result['userID']."','$image', 1, 0);";
		$execute = $conn -> query($quer);
		//Hell yeah! Lets check if dat shit inserted. Dank memes bruh ehehehe
		if ($execute)
		{
			echo "<text> Thank you for selling your item here! <br/>";
			
		}else{echo("Dude, there r bugs: ".mysqli_error($conn));}
		mysqli_close($conn);
	}
	else 
	{
		echo $_POST['name'];
		echo $_POST['dsc']; 
		echo $_POST['price'];
		echo $_POST['brand'];
		echo $_POST['image'];
		//header("Location: sellform.html");
	}
?>