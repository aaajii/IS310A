<!DOCTYPE html>
<html>
<head>
<title>
Login
</title>
<link rel="stylesheet" type="text/css" href="newLogin-style.css">
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
<input type = "submit" value = "Login" name = "submit">
<?php
include ("config.php");
include ('loginserver.php');
}else{header("Refresh:0;url=/IS310A/tempHome/home.php");}
?>
</body>
</html>