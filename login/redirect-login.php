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
if(!isset($_COOKIE['email']))
{
	include ('C:\Users\Lemons\Desktop\USBWebserver v8.6\root\IS310A\config.php');
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
				echo "<p id='statement'> Your account has not yet been confirmed by the admin. Please try again later. Redirecting you to the log-in page now </p>";
				header("Refresh:3;url=login.php");
			}else if($verify['status'] == 2)
			{
				setcookie('email',$verify['email'],time()+86400,'/');
				header("Location: /IS310A/adminView/adminpage.php");
			}
			else{
				setcookie('email',$verify['email'],time()+86400,'/');
				header("Location: /IS310A/tempHome/home.php");
			}
		}
	else
	{
		echo "</br></br></br></br></br></br></br></br></br></br></br>
		</br></br></br><h1><center>Invalid Credentials, Redirecting in 3 seconds!</center></h1>";
		header("Refresh:3;url=login.php");
	}
		
		
		
	}
}else{header("Location:home.php");}
?>