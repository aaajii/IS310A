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
		$query = "INSERT into users(first,last,pass,user,contact_number) value('$firstname','$;lastname','$password','$username','$contactnumber');";
		$result = $conn -> query($query);
		setcookie('username','$user',time()+86400,'/');
		header("Location: tempHome/home.php");
	}
?>

