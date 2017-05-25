<!DOCTYPE html>
<html>
	<head>
		<title>mid_Exer01: PHP and MySQL interactions</title>

			<!--DON'T DELETE. contains styles for this page -->
		<link rel="stylesheet" href="https://dl.dropboxusercontent.com/s/yxbyyl56tdwz1wq/mid_Act01b.css">
		
	</head>
	<body>
		
			<?php
				include('config.php');
				
				if(isset($_POST['del']))
				{
 
 /* place your scripts here */
					$ID = $_POST['del'];
					$qry = "DELETE FROM dbtable01a WHERE ID = $ID";
					$sel = "SELECT * FROM dbtable01a WHERE ID = $ID";
					
					$result = $conn -> query($sel);
					
					if($row = $result -> fetch_assoc())
					{
						if($conn -> query($qry))
						{
							echo "Deletion succesful, redirecting in 3 seconds!";
						}
					}else echo "ERROR! ID not found, redirecting in 3 seconds!";
					header("Refresh: 3; url=mid_Exer01.php");
				
				}
				
				$conn->close();
			
			?>

		

	</body>
</html>
