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
<body>
<div class = "login">
<h1 align = "center"> Login </h1>
<form action = "newLogin.php" method = "post" style = "text-align:center;">
<input type = "text" placeholder = "Username" id = "user" name = "user"> <br/><br/>
<input type = "password" placeholder = "Password" id = "password" name = "password"> <br/><br/> 
<input type = "submit" value = "Login" name = "submit">
<?php
include ('loginserver.php');
?>	
</body>
</html>