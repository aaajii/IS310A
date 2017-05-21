<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="productstyles.css"> 
</head>

<body>
<h2>Product list</h2>
<h4>Browse items here</h4>
<?php
	include 'config.php';
	
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
		$newDesc = "";
		if (strlen($description) > 50)
		{
			for ($i = 0; $i < 50; $i++)
			{
				$newDesc .= $description[$i];
			}
			$newDesc .= "...";
		}else
		{
			$newDesc = $description;
		}
		
		echo " <div class='responsive' style='width: 30%;background-image: url('".$result['itemImage']."'); background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;'>
				  <a href='productdetails.php?id=".$result['itemID']."'><div class='product' >
					<center>
					  <!--<img src='".$result['itemImage']."' alt='".$result['itemName']."' style='width: 300px;height: 500px;object-fit: cover;'-->
					</center>
					
					<div class='desc'><b>".$result['itemName']."</b> <br/>
									  ".$newDesc."
					</div>
				  </div></a>
				</div>";
	}
?>
</body>
</html>