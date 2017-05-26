<?php
	if (isset($_COOKIE['username']))
	{
?>

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
			  FROM  `products`";
	//Let me check if there are errors ahehe
	if (!mysqli_query($conn,$test))
	{
	  echo("Error description: " . mysqli_error($conn));
	}
	
	$execute = $conn -> query($test);
	if($execute -> fetch_assoc())
	{		
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
			
			echo " <div class='responsive'>
					  <div class='product'>
						<center><a href='productdetails.php?id=".$result['itemID']."'>
						  <img src='".$result['itemImage']."' alt='1024px-No_image_available.svg.png' style='width:30%;height:auto;'>
						</a>
						<p><span><b> Price: </b>".$result['itemPrice']." </span></p></center>
						
						<div class='desc'><b>".$result['itemName']."</b> <br/>
										  ".$newDesc."
						</div>
					  </div>
					</div>";
		}
	}else{echo "Looks like nobody is selling, redirecting you now to the home page";
	header("Refresh: 3; url= /IS310A/home%20page%204bytes/hp.php");}
?>
</body>
</html>
<?php 
	}else{header("Location: /IS310A/login/newLogin.php");}
?>