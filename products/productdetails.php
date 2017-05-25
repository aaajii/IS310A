<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>A Pen by  Jimuel Banawan</title>
      <link rel="stylesheet" href="detail-style.css">
</head>

<body>
  <head>
</head>

<body>
  <div class="image-header">
    <h1> Product Name </h1>
	<h4> In stock: <span class="stock"> 0 </span></h4>
  </div>
  <div class="image-holder">

  </div>
  <div class="product-details">
    <span class="details"> Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolorLorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsu</span>
    </div>
	<center><div class="add-calculations">
	  <b>Total Price:</b> <span id="price">0</span> <br/>
	  <span class="quantity">Quantity</span> <button id="less">-</button>
		<b id="info"></b>
		<button id="more">+</button>
	  <br />
	  <button class="add-to-cart">Add To Cart <img src="shoppingcart-icon.png" alt="" class="icon"> </button>
    <div class="result-box"><span id="feedback"> </span> </div>
	
	</div></center>
  <div class="seller-info">
	<h5> Seller Details: </h5>
    <h2 class="seller-name"> Seller Name </h2>
    <p class="seller-details" >Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
    <span class=""> Contact No. </span> <span class="number"> 09XX-XXX-XXXX</span>
    <br />
    <button class="profile"> See Seller Profile</button>
  </div>
  
  <!--Lagyan ko ng javascript ahehe -->
  <script src="/IS310A/extras/bootstrap-3.3.7-dist/jquery.min.js"></script>
  <script>
	$(document).ready(function(){
<!-- PHP CODING TIME! -->
<?php
		if (isset($_GET['id']))
		{
			include 'config.php';
			
			$id = $_GET['id'];
			$query = "SELECT * FROM  `products` WHERE itemID = '$id';";
			if (!mysqli_query($conn,$query))
			{
				echo("lelz bugs, contact the administrator: " . mysqli_error($conn));
			}
			$resultItem = $conn -> query($query);
			
			if($row = $resultItem ->fetch_assoc())
			{
				$query = "SELECT * FROM  `users` WHERE userID= '".$row['userID']."';";
				if (!mysqli_query($conn,$query))
				{
					echo("lelz bugs, contact the administrator: " . mysqli_error($conn));
				}
				$resultUser = $conn -> query($query);
				$bushit = '"';
				if($user = $resultUser->fetch_assoc())
				{
					echo "
					$('.image-header h1').html('".$row['itemName']."');
					$('.image-holder').css('background-image','url($bushit".$row['itemImage']."$bushit)');
					$('.product-details .details').html('".$row['itemDescription']."');
					$('.add-calculations #price').html('".$row['itemPrice']."');
					$('.stock').html('".$row['stock']."');
					
					$('.seller-info .seller-name').html('".$user['firstname']." ". $user['lastname']."');
					$('.seller-details').html('wala pa na implement ang new database ahahah ulul');
					$('.number').html('".$user['contact']."');
					";
				}else
				{
					echo "Eghk, that item is not available... Ill redirect you back to the browsing page";
					header("Refresh: 3; url=products.php");
				}
			}else
			{
				echo "Welp walang lumabas eh". mysqli_error($conn);
			}
		}else
		{
		echo $_SERVER['id'];
			echo "Well, that's embarassing... the item is not available for some reason, please go back to the page";
		}
	
	
?>
		
	});
	var howMany = 1;
	var price = <?php echo $row['itemPrice']?>;
	$('#more').click(function(){
		if(howMany < $(".stock").text())
		{
			howMany += 1;
			$("#info").text(howMany);
			$("#price").text(howMany*price);
		}
	});
	$('#less').click(function(){
		if(howMany > 1)
		{
			howMany -= 1;
			$("#info").text(howMany);
			$("#price").text(howMany*price);
		}
	});
	$("#info").text(howMany);
	var total=howMany*price;
	$(".add-to-cart").click(function(){
		$.ajax({
						type: 'POST',
						url: 'add-to-cart.php',
						data: { id: name, name: desc,
								: prce, brand: brnd,
								image: imge},
						success: function(response){
							$('#feedback').html(response);
						}
					});
		
	});
  </script>
</body>
</html>
