<!DOCTYPE html>
<html>
<head>
<title>
User Validating!
</title>
<style>
#statement{
	padding: 25%;
}
</style>
</head>

<body>
</body>
</html>
<?php
	include ('config.php');
	if(isset($_POST['passUsername']) && isset($_POST['passPassword']))
	{
		$username = $_POST['passUsername'];
		$password = $_POST['passPassword'];
		
		
	$result = $conn -> query("SELECT * FROM users WHERE email = '$username' AND password = '$password'");
	if (!mysqli_query($conn,"SELECT * FROM users WHERE email = '$username' AND password = '$password'"))
	  {
	  echo("Error description: " . mysqli_error($conn));
	  }
	$verify = $result -> fetch_assoc();
	$count = count($verify);
		if($count>0)
		{
			if($verify['status'] == 0)
			{
				echo "<p id='statement'> Your account has not yet been confirmed by the admin. Please try again later. </p>";
				header("Refresh:3;url=login.php");
			}else if($verify['status'] == 2)
			{
				echo "<p id='statement'> Admin mode activated! Redirecting in 3 seconds</p>";
				header("Refresh:3;url=adminpage.php");
			}
			else{
				setcookie('name',$username,time()+1800,'/');
			echo "</br></br></br></br></br></br></br><h1><center>welcome ". $verify['firstname']. "!, Redirecting to home page in 3 seconds</center></h1>";
			header("Refresh:3;url=home.php");
			}
		}
	else
	{
		echo "</br></br></br></br></br></br></br></br></br></br></br>
		</br></br></br><h1><center>Invalid Credentials, Redirecting in 3 seconds!</center></h1>";
		header("Refresh:3;url=login.php");
	}
		
		
		
	}
?>