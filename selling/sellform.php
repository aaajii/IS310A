<!DOCTYPE html>

	<html>
		<head>
			
			<title>Sell</title>
			<link rel="stylesheet" type="text/css" href="sell-style.css"> 
			<style>
			    

table 
{
	border-collapse: collapse;
}
			   
    
        </style>
		</head>
		<body>
	
          <div id="datainput" align="center">
            <table height="400px">
			<br>
			
            <tr>
              <th>What are you selling?</th>
              <td><input type="text" id ="name"></td>
            </tr>
			<tr>
              <th>Description:</th>
              <td><textarea cols="50" rows="4" id="dsc"></textarea></td>
            </tr>
			<tr>
              <th>How much is this?</th>
              <td><input type="text" id="price"></td>
            </tr>
			<tr>
              <th>Brand:</th>
              <td><input type="text" id="brand" value=""></td>
            </tr>
			
		    <tr>
              <th>Upload photo:</th>
              <td><input type="text" id="image" value=""> </br></td>
            </tr>
        </table>

        <button id="button" name = "button">Sell!</button>
        <br>
        <br>
        </div>
		
		<div id="dataoutput" align="center">
		
			<?php
				include 'config.php';
				if(isset($_GET['id']))
				{
					include 'config.php';
					$id = $_GET['id'];
					$query = "DELETE FROM products WHERE itemID = $id;";
					if (!mysqli_query($conn,$query))
					{
						echo("Error description: " . mysqli_error($conn));
					}
					if($conn -> query($query))
					{
						
					}else {echo "there seems to be a mistake";};
				}
				$query = "SELECT userID FROM users WHERE username = '".$_COOKIE['username']."';";
				
				if (!mysqli_query($conn,$query))
				{
				  echo("Error description: " . mysqli_error($conn));
				}
				
				$execute = $conn -> query($query);
				
				$id = $execute -> fetch_assoc();
				
				$test = " SELECT * 
						  FROM  `products` WHERE userID = ".$id['userID']."";
				//Let me check if there are errors ahehe
				
				if (!mysqli_query($conn,$test))
				{
				  echo("Error description: " . mysqli_error($conn));
				}
				
				$execute = $conn -> query($test);
					
				while($result = $execute -> fetch_assoc())
				{
					if(count($result) > 0)
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
								  <button> Edit </button> <a href='sellform.php?id=".$result['itemID']."'<button> Remove </button></a>
									<center>
									  <img src='".$result['itemImage']."' alt='1024px-No_image_available.svg.png' style='width:30%;height:auto;'>
									<p><span><b> Price: </b>".$result['itemPrice']." </span></p></center>
									
									<div class='desc'><b>".$result['itemName']."</b> <br/>
													  ".$newDesc."
									</div>
								  </div>
								</div>";
					}else
					{
						echo "You are currently not selling anything";
						break;
					}
				}
			?>
		
		
        </div>
		<div id="feedback"></div>
		<marquee scrollamount = "20">
			<center><img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->	
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->	
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->	
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->	
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->	
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->	
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->	
			<img src = "light.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "blue.jpg" width = "22%"/> <!-- picture niya and size niya-->
			<img src = "light.jpg" width = "22%"/></center></marquee>
		
		


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script> 
	$('#button').click(function(){
		var name = $('#name').val();
		var desc = $('#dsc').val();
		var prce = $('#price').val();
		var brnd = $('#brand').val();
		var imge = $('#image').val();
		if (imge == "")
			imge = "No image."
		
		
		if (
			name == "" ||
			desc== "" ||
			prce== "" ||
			brnd == "" ||
			desc == ""
			)
		{
			alert("What the fuck");
		  
		}else
		{
			$.ajax({
						type: 'POST',
						url: 'redirect-sell.php',
						data: { name: name, dsc: desc,
								price: prce, brand: brnd,
								image: imge},
						success: function(response){
							$('#feedback').html(response);
						}
					});
					
		}
	
	});
</script>

</body>
</html>