<!DOCTYPE html>
<html>
<head>
<title>
Login
</title>
<style>
.login
{
	width: 360px;
	margin:50px auto;
	font:Cambria, "Hoofler Text", "Liberation Serif", Times, "Times New Roman", serif;
	border-radius:10px;
	border:2px solid #ccc;
	padding: 10px 40px 25px;
	margin-top:78px;
}
input[type=text], input[type=password]
{
	width:99%;
	padding:10px;
	margin-top:8px;
	border:1px solid #ccc;
	padding-left:5px;
	font-size:16px;
	font-family:Cambria, "Hoofler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
input[type=submit]
{
	width:100%;
	background-color:blue;
	color:white;
	border:2px solid #06F;
	padding:10px;
	font-size:20px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px;
}
</style>
</head>
<?php 
if(!isset($_COOKIE['username']))
{
?>
<body>

<div class = "login">
<h1 align = "center"> Welcome to 4bytes! </h1>
<form action = "newLogin.php" method = "post" style = "text-align:center;">
<b>Username:</b> <input type = "text" placeholder = "Username" id = "user" name = "user"> <br/><br/>
<b>Password:</b> <input type = "password" placeholder = "Password" id = "password" name = "password"> <br/><br/> 
<input type = "submit" value = "Login" name = "submit"></br>Dont have an account?<a href = "newRegister.php">Sign up Here!</a></br>
<?php
include ("config.php");
include ('loginserver.php');
}else{header("Refresh:0;url=/IS310A/tempHome/home.php");}
?>
</body>
</html>