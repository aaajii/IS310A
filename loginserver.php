<?php
if(isset($_POST['submit']))
{
		if(isset($_POST['user']) && isset($_POST['password']))
		{
			$user = $_POST['user'];
			$password = $_POST['password'];
			include('config.php');
			$result1 = $conn -> query("SELECT * FROM users WHERE email = '$user';");
			$result2 = $conn -> query("SELECT * FROM users WHERE  pass = '$password';");
			$verify1 = $result1 -> fetch_assoc();
			$verify2 = $result2 -> fetch_assoc();
			$count1 = count($verify1);
			$count2 = count($verify2);
			if($count1 > 0 && $count2 > 0)
			{
				echo "Login Successful!, Redirecting in 3 seconds";
				header("Refresh;3:url=newRediretingRegistration.php");
			}
		 else if(empty($_POST['user']) || empty($_POST['password']))
		{
			echo "Your email or password is empty";
			header("Refresh;1:url = newLogin.php");
		}
		else if($count1 == 0)
		{
			echo " The Email is incorrect";
			header("Refresh;1:url=newLogin.php");
		}
	    else if($count2 == 0)
		{
			echo "The Password is incorrect";
			header("Refresh;1:url=newLogin.php");
		}
		}
}
?>