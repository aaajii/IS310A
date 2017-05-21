<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="productstyles.css"> 
</head>

<body>
<h2>Product list</h2>
<h4>Browse items here</h4>
<?php
	include 'C:\Users\Lemons\Desktop\USBWebserver v8.6\root\IS310A\config.php';
	
	$test = " SELECT * 
			  FROM  `products`
			  WHERE  `allowed` = 1;";
	//Let me check if there are errors ahehe
	if (!mysqli_query($conn,$test))
	{
	  echo("Error description: " . mysqli_error($conn));
	}
	
	$execute = $conn -> query($test);
		
	while($result = $execute -> fetch_assoc())
	{
		$description = $result['itemDescription'];
		if (strlen($description) > 50)
		{
			for ($i = 0; $i < 50; $i++)
			{
				$description .= $description[$i];
			}
			$description .= "...";
		}
		
		echo " <div class='responsive'>
				  <div class='product'>
					<a href='productdetails.php?id=".$result['itemID']."'>
					  <img src='".$result['itemImage']."' alt='".$result['itemName']."' style='width:300px;height:200px;'>
					</a>
					
					<div class='desc'><b>".$result['itemName']."</b> <br/>
									  ".$description."
					</div>
				  </div>
				</div>";
	}
?>
</body>
</html>