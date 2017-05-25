<!DOCTYPE html>

<html>
<head>
</head>
<body>
	<div class="cart">
		<?php
			include 'config.php';
			session_start();
			
			if((isset($_SESSION['idList']) && isset($_SESSION['quantityList'])))
			{
				$id = $_SESSION['idList'];
				$qty = $_SESSION['quantityList'];
				
				if(count($id) > 0)
				{
					  echo "<table border=1>
					  <tr> <th> Name </th> <th> Price </th><th> Quantity </th><th> Total</th> </tr>";
					  
				$total=0;
					for($i = 0; $i < count($id); $i++)
					{
						$temp = $_SESSION['quantityList'][$i];
						$query = "SELECT * FROM  `products` WHERE itemID = ".$_SESSION['idList'][$i];
						$result = $conn -> query($query);
						if (!mysqli_query($conn,$query))
						{
							echo("Error description: " . mysqli_error($conn));
						}
						if($row = $result -> fetch_assoc())
						{
							
							if(count($row) > 0)
							{
							  $tots = ($row['itemPrice']*$temp);
							  $welp = $i+1;
							  echo "<tr>
								<td>".$row['itemName']."</td> <td> ".$row['itemPrice']."</td> <td>".$_SESSION['quantityList'][$i]."</td><td>$tots</td><td>
								<a href='shopping-cart.php?num=".$welp."&qty=".$temp."&id=".$_SESSION['idList'][$i]."'><button id='remove'> x </button></a>
							  </tr>
							  ";
							  $total += $tots;
							}else
							{
								echo "Item does not exist! :O ";
							}
						}else
						{
							echo "MAY MALI BAI";
						}
					}
				echo "<tr><td colspan=3>TOTAL: </td> <td>$total </td> </tr>";
				echo "</table>";
				}else
				{
					echo "Shopping cart is empty!";
				}
			
			}else
			{
				echo "Shopping cart is empty!";
			}
		?>
	
	</div>
	<div id="response">
		<span id="text"> </span>
	</div>
	<!--Lagyan ko ng javascript ahehe -->
	<script src="/IS310A/extras/bootstrap-3.3.7-dist/jquery.min.js"></script>
	<script> 
	$('#remove').click(function(){
			<?php
				if(isset($_GET['num']))
				{
					$num = $_GET['num']-1;
					$id = $_GET['id'];
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
					$temp1 = $stocks['stock'] + $_GET['qty'];
					$temp2 = $_SESSION['quantityList'][$num] - $_GET['qty'];
					$query = "UPDATE products SET stock = ".$temp1.", reserved = ".$temp2." WHERE itemID = $id ;";
					if (!mysqli_query($conn,$query))
					{
						echo("Error description: " . mysqli_error($conn));
						
					}
					if ($conn -> query($query))
					{
						array_splice($_SESSION['idList'],$num,1);
						array_splice($_SESSION['quantityList'],$num,1);
						echo "document.getElementById('text').innerHTML = 'deleting...';";
						header("Refresh: 5; url=shopping-cart.php");
					}
					else
					{
						echo "document.getElementById('text').innerHTML = 'Deleting...'";
					}
						//
				}						
			?>
		
		});
	</script>
</body>
</html>