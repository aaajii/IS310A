<html>
<head>
<title>
</title>
<style>
p
{
	color:white;
}
html
{
	background-color:#00BFFF;
}
input
{
	color:blue;
}
select
{
	color:blue;
}
</style>
</head>
<body>
</body>
</html>
<?php
	include ('config.php');
		if(isset($_POST['pFirst'])
		&& isset($_POST['pLast'])
		&& isset($_POST['pEmail'])
		&& isset($_POST['pPass'])
		&& isset($_POST['pNumber'])
		&& isset($_POST['pGender'])
		&& isset($_POST['pAdmin']))
	{
		$firstName = $_POST['pFirst'];
		$lastName = $_POST['pLast'];
		$emailAddress = $_POST['pEmail'];
		$passWord = $_POST['pPass'];
		$numBer = $_POST['pNumber'];
		$genDer = $_POST['pGender'];
		$adMin = $_POST['pAdmin'];
			$result1 = $conn -> query("SELECT * FROM users WHERE email = '$emailAddress'");
			$result2 = $conn -> query("SELECT * FROM users WHERE password = '$passWord'");
			$verify1 = $result -> fetch_assoc();
			$verify2 = $result -> fetch_assoc();
			$count1 = count($verify1);
			$count2 = count($verify2);
			
			if($count1 == 0 && $count2 == 0)
			{
		$result = $conn -> query("INSERT into users(first,last,email,pass,contact,gender,admin) 
		values('$firstName','$lastName','$emailAddress','$passWord','$numBer','$genDer','$adMin');");
	if($result == TRUE)
	{
		echo "</br></br></br></br></br></br></br></br></br></br><center><h1>Registration Successful, Redirecting in 3 seconds</h1></center>";
		setcookie('name',$firstName,time()+1800,'/');
		header("Refresh:3;url=regredirect.php");
	}
			}
		else if($count1 > 0)
		{
			echo "</br></br></br></br></br></br></br></br></br></br><center><h1>The Email is already taken!</h1></center>";
			header("Refresh:3;url=register.php");
		}
		else
	{
		echo "</br></br></br></br></br></br></br></br></br></br><center><h1>The Email is already taken!</h1></center>";
		header("Refresh:3;url=register.php");
	}
	}
?>