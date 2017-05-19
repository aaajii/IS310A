<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<title>
Welcome to Fourbytes!
</title>
<!--Css link -->
<link rel="stylesheet" type="text/css" href="logindesign.css">
</head>
<body style="background-image: url('images/skyline-buildings-new-york-skyscrapers.jpg');background-repeat: no-repeat;background-attachment: fixed;">
<?php 
include ('config.php');
if(!isset($_COOKIE['name']))
{
?>
<div class="header">
<h1 class="headertext">Welcome to </br>4BYTES!</h1>
</div>
<div class="container" id="forms">
<form name = "Form1" id = "firstForm">
<!-- input type text consist of the username and password -->
<table align = "center">
<!-- Using Space to get the input into the center screen.-->
<tr>
  <td><p>Email:</p></td><td><input class="txt-css" type="text" name="userName" value="" id="userName"></td>
</tr>
<tr>
  <td><p>Password:</p></td><td><input class="txt-css" type="password" name="passWord" value="" id="passWord"></td>
</tr>
<tr>
  <td colspan="2">
    </br>
    </br>
	<center>
    <input class="enjoy-css" type="button" name="" value="Log in" onClick="validation()">
	</center>
  </td>
</tr>
</table>
    <center></br>Don't have an account yet? <a href="register.php"> Sign up here! </a></center></br>
</form>
<form name="Form2" action="redirect-login.php" method="post">
  <input type="hidden" value="" id="passUsername" name="passUsername">
  <input type="hidden" value="" id="passPassword" name="passPassword">
</form>
</div>
<?php
}else{header("Refresh:0;url=home.php");}
?>
<script>
	function validation()
	{
		var username = document.Form1.userName.value;
		var password = document.Form1.passWord.value;
		if(username == "" || password == "")
		{
			alert("Please input your username or password!");
		}
		else
		{
			document.getElementById("passUsername").value = username;
			document.getElementById("passPassword").value = password;
			document.Form2.submit();
		}
		
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>