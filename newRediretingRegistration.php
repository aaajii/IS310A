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
	if (isset($_POST["username"]) && isset($_POST["firstname"]) && isset($_POST["contactnumber"]) && isset($_POST["lastname"]) && isset($_POST["password"])) {
		$username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$contactnumber = $_POST['contactnumber'];
		echo "Welcome  ".$username. $firstname;
	}
?>

