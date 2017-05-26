<?php
	if( isset($_POST['name']) &&
		isset($_POST['dsc']) &&
		isset($_POST['price']) &&
		isset($_POST['brand']) &&
		isset($_POST['image'])
	  )
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
			$brand = $conn -> query("SELECT * FROM products WHERE itemBrand = '$brnd'");
		$verify = $brand -> fetch_assoc();
		$count = count($verify);
		if($count > 0)
		{
			echo "The brand name you input is already taken";
		}
		
		//Now lets fucking insert that product into the sexy database baby
		$quer = "INSERT INTO `products` 
				 (`itemName`, `itemDescription`, `itemPrice`, `itemBrand`, `userID`, `itemImage`, stock, reserve) 
				 VALUES 
				 ('$name','$desc',$prce,'$brnd','".$result['userID']."','$image', 1, 0);";
		$execute = $conn -> query($quer);
		//Hell yeah! Lets check if dat shit inserted. Dank memes bruh ehehehe
		if ($execute == true)
		{
			echo "<text> Thank you for selling your item here! You can view it now in the store <br/>";
			header ("Refresh: 2; url: home.php");
			
		}else{echo("Dude, there r bugs: ".mysqli_error($conn));}
		mysqli_close($conn);
	}
	else 
	{
		header("Location: sellform.html");
	}
?>