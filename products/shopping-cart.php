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
					  <tr> <th> ID </th> <th> Quantity </th> </tr>";
				//for ID
				for($i = 0; $i < count($id); $i++)
				{
					echo "<tr>
							<td>".$_SESSION['idList'][$i]."</td> <td>".$_SESSION['quantityList'][$i]."</td><td>
							<a href='shopping-cart.php?id=".$i++."?qty=".$i++."'><button id='remove'> x </button></a>
						  </tr>
						  ";
				}
				echo "</table>";
				}else
				{
					echo "You haven't ordered anything yet!";
				}
			
			}else
			{
				echo "You haven't ordered anything yet!";
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
				if(isset($_GET['id']))
				{
					echo "true!";
					array_splice($_SESSION['idList'], ($_GET['id']-1),1);
					array_splice($_SESSION['quantityList'], ($_GET['qty']-1),1);
					echo "document.getElementById('text').innerHTML = 'deleting...';";
					header("Refresh: 5; url=shopping-cart.php");
				}else
				{
					echo "document.getElementById('text').innerHTML = 'Couldnt remove item!'";
				}
				//
				
			?>
		});
	</script>
</body>
</html>