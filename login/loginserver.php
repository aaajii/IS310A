<?php
if(isset($_POST['submit']))
{
		if(isset($_POST['user']) && isset($_POST['password']))
		{
			
			include('config.php');
			$user = $_POST['user'];
			$password = $_POST['password'];
			$qry = "SELECT * FROM users WHERE username = '$user' AND password = '$password';";
			$result1 = $conn -> query($qry);
			if (!mysqli_query($conn,$qry))
			{
				echo("Error description: " . mysqli_error($conn));
			}
			$verify1 = $result1 -> fetch_assoc();
			$count1 = count($verify1);
			if($count1 > 0)
			{
				setcookie('username','$user',time()+86400,'/');
				header("Refresh:0;url=/IS310A/home%20page%204bytes/hp.php");
			}
			 else if(empty($_POST['user']) || empty($_POST['password']))
			{
				echo "Your username or password is empty";
				header("Refresh:1;url = newLogin.php");
			}
			else if($count1 == 0)
			{
				echo " The Username is incorrect";
				header("Refresh:1;url=newLogin.php");
			}
			else if($count2 == 0)
			{
				echo "The Password is incorrect";
				header("Refresh:1;url=newLogin.php");
			}
		}
}
?>