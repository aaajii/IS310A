<!DOCTYPE html>
<!--Displays tables of users that are not confirmed (i.e. with the 'Status' of 0) -->

<html>

<head>
</head>


<body>
<h3> Pending confirmation from you: </h3>
<?php
	include "config.php";
	
	$qry = "SELECT * FROM users WHERE status = 0";
	if (!mysqli_query($conn,$qry))
	{
		echo("Error description: " . mysqli_error($conn));
	}
	$execute = $conn -> query($qry);
	
	
	echo "<table border=1>";
	while ($result = $execute -> fetch_assoc())
	{
		echo "<tr> 
				<td>$result['firstname'] </td><td>$result['lastname'] </td><td>$result['contact'] </td><td>$result['email'] </td><td>$result['username'] </td>
				<td><button type='button' id='confirm'>Confirm!</button></td><td><button type='button' id='ignore'> Ignore! </button></td>
			  </tr>";
	}
	echo "</table>";
	mysqli_close($conn);
	
?>


<script src="/IS310A/extras/bootstrap-3.3.7-dist/jquery.min.js">
$('#confirm').click(function() {	
	var ID = $('#confirm').val();
	<?php	
		/*include "config.php";
		
		$qry = "UPDATE  `fourbytes`.`users` SET  `status` =  '1' WHERE  `users`.`userID` = ".?> ID .";";
		if (!mysqli_query($conn,$qry))
		{
			echo("Error description: " . mysqli_error($conn));
		}
		
		if($execute = $conn -> query($qry))
		{
			echo "<p> User Added Succesfully!";
			header ("Refresh:1;url=users.php");
		}else
		{
			echo("Ayyyyyyyyyyyyylmao: " . mysqli_error($conn));
		}
	*/ //Welp I think we gotta change our approach here bruh ahehe ciyao~
	?>

});

$('#ignore').click(function() {	
	var ID = $('#ignore').val();
	<?php
		//Yo waddup how to send data from there to here wew wtf
		//$qry = "DELETE FROM `fourbytes`.`users` WHERE `users`.`userID` = ".;";
	
	?>

});

</script>
</body>

</html>