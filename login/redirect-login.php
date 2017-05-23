<!DOCTYPE html>
<html>
<head>
<title>
User Validating!
</title>
</head>

<body>
</body>
</html>
<?php
if(!isset($_COOKIE['username']))
{
	include ('config.php');
	if(isset($_POST['passUsername']) && isset($_POST['passPassword']))
	{
		$username = $_POST['passUsername'];
		$password = $_POST['passPassword'];
		
		
	$result = $conn -> query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
	if (!mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password'"))
	  {
	  echo("Error description: " . mysqli_error($conn));
	  }
	$verify = $result -> fetch_assoc();
	$count = count($verify);
		if($count>0)
		{
				setcookie('username',$verify['username'],time()+86400,'/');
				header("Location: /IS310A/tempHome/home.php");
		}
	else
	{
		echo "</br></br></br></br></br></br></br></br></br></br></br>
		</br></br></br><h1><center>Invalid Credentials, Redirecting in 3 seconds!</center></h1>";
		header("Refresh:3;url=login.php");
	}
		
		
		
	}
}else{header("Location:/IS310A/tempHome/home.php");}
?>