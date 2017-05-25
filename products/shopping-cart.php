<!DOCTYPE html>

<html>
<head>
</head>
<body>
	<div class="cart">
		<?php
			session_start();
			
			//$result = implode(',',$_SESSION['cart']);
			
			//$sql = "SELECT * FROM products WHERE itemID IN ($result";
			
			$id = $_SESSION['idList'];
			$name = $_SESSION['nameList'];
			$qty = $_SESSION['quantityList'];
			$total = $_SESSION['totalList'];
			
			
			foreach($id as $currnum => $num )
			{
				foreach($num as $display)
				{
					echo "$display <br />";
				}
			}
			foreach($name as $currnum => $num )
			{
				foreach($num as $display)
				{
					echo "$display <br />";
				}
			}
			foreach($qty as $currnum => $num )
			{
				foreach($num as $display)
				{
					echo "$display <br />";
				}
			}
			foreach($total as $currnum => $num )
			{
				foreach($num as $display)
				{
					echo "$display <br />";
				}
			}
			session_destroy();
		?>
	</div>
</body>
</html>