<!DOCTYPE html>
<html>
<head>
<title>
Redirecting in 3 seconds!
</title>
</head>
<body>

</body>
</html>
<?php 
	include ('config.php');
	if (isset($_POST["username"]) && isset($_POST["firstname"]) && isset($_POST["contactnumber"]) && isset($_POST["lastname"]) && isset($_POST["password"])) {
		$username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$contactnumber = $_POST['contactnumber'];
		$query = "INSERT into users(firstname,lastname,password,username,contact) value('$firstname','$lastname','$password','$username','$contactnumber');";
		if (!mysqli_query($conn,$query))
		{
			echo("Error description: " . mysqli_error($conn));
		}else
		{
		$result = $conn -> query($query);
		setcookie('username','$user',time()+86400,'/');
		header("Location: tempHome/home.php");}
	}
?>

