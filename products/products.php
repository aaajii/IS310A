<!DOCTYPE html>
<html>
  <head>
    <title>Products</title>
      <style>
	       h1 {
	       font-family: 'Crete Round', serif;
	       font-weight: bold;
	       color: blue;
	       font-size: 65px;
	      
              }		
		   h2 {
				  font-family: 'Crete Round', serif;
	       font-weight: bold;
	       color: black;
	       font-size: 40px;
		   margin-left: 50px;
			  }
			 h4 {
				  font-family: 'Crete Round', serif;
	       font-weight: bold;
	       color: black;
	       font-size: 20px;
			  }  
			  
        .wrapper {
                	margin: 0 auto;
                	padding: 0 10px;
                	width: 940px;
					
               }
         header {
	              height: 100px;
				  background-color: gray;
				  opacity: 0.75;
	            }

         header h1 {
	                 float: left;
	                 margin-top: 1px;
	                 margin-left: 50px;
                   }
		
          header nav {
	               float: right;
                     }

       
		 .btn-group .button {
    background-color: white;
    border: none;
    color: blue;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 17px;
    cursor: pointer;
    float: right;
	margin-top: 40px;
}
.btn-group .buttonact {
    background-color: black;
    border: none;
    color: blue;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 17px;
    cursor: pointer;
    float: right;
	margin-top: 40px;
}
.btn-group .button:hover {
    background-color: black;
}
.btn-group .button2{
	float: center;
	border-radius: 50%;
	margin-top:15px;
	margin-left:80px;
}
.shopcart{height:60px;width:60px;}

#background{float: center; background-color: red;}
#product{margin-left:225px;margin-right:225px;background-color: red;}
</style>
<link rel="stylesheet" type="text/css" href="productstyles.css"> 
<link rel="shortcut icon" href="bytes-icon.ico" />
</head>

<body>

    <header>
	  <div class="wrapper">
		<h1>4Bytes<span class="color"></span></h1>
		
		<div class="btn-group">
		  <button class="button"><a href="newLogin.php">Log out</a></button>
		  <button class="button"><a href="http://localhost:8080/IS310A/selling/sellform.html">Sell</a></button>
          <button class="buttonact"><a href="http://localhost:8080/IS310A/products/products.php">Buy</a></button>         
		  <button class="button"><a href="http://localhost:8080/IS310A/home%20page%204bytes/hp.html">Home</a></button>
          <button class="button2"><a href=""><img class="shopcart " src="shop-cart.png" ></a></button>
         
          
        </div>
	  </div>
	</header>
	<div id="background">
	<h2><p>Product List</p></h2>

<div id="product">
<h4>Browse items here:</h4>
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
		
		echo " <div class='responsive' >
				  <div class='product'  >
				  
				  
					<center><a href='productdetails.php?id=".$result['itemID']."'>
					
					  <img src='".$result['itemImage']."' alt='".$result['itemName']."' style=''>
					</a>
					<p><span><b> Price: </b>".$result['itemPrice']." </span></p></center>
					
					<div class='desc' ><b>".$result['itemName']."</b> <br/>
									  ".$newDesc."
					</div>
				 
				  </div>
				</div>";
	}
?>
</div>
</div>
</body>
</html>