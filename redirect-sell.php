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
		$user = $_COOKIE['name'];
		
		$IDquer = " SELECT userID 
					FROM  `users`
					WHERE  `firstname` LIKE '$user';";
		$IDresult = $conn -> query($IDquer);
		//Let me check if there are errors ahehe
		if (!mysqli_query($conn,$IDquer))
		{
		  echo("Error description: " . mysqli_error($conn));
		}
		mysqli_close($conn);
		//Okay let's continue
		
		
		//Now lets fucking insert that product into the sexy database baby
		include 'config.php';
		$quer = "INSERT INTO `products` 
				 (`itemName`, `itemDescription`, `itemPrice`, `itemBrand`, `userID`, `allowed`, `itemImage`) 
				 VALUES 
				 ('$name','$desc',$prce,'$brnd','$IDresult',0,'$image');";
		$execute = $conn -> query($quer);
		$result = $execute -> fetch_assoc();
		//Hell yeah! Lets check if dat shit inserted. Dank memes bruh ehehehe
		if ($execute == true)
		{
			echo "<text> Thank you for selling your item here! <br/>
					note** <b> it must be confirmed by the admin before being posted </b>";
			header ("Refresh: 2; url: home.php");
			
		}else{echo("Fuck you man, there r bugs: ".mysqli_error($conn));}
		
	}
	else 
	{
		echo "".$_POST['name'].
		$_POST['dsc']
		.$_POST['price']
		.$_POST['brand']
		.$_POST['image'];
		//header("Location: sellform.html");
	}
?>