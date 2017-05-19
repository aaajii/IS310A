<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<title>
Welcome to our Website!
</title>
<style>
body
{
	height:100%;
	width: auto;
	background-image: url("skyline-buildings-new-york-skyscrapers.jpg");
	background-repeat: no-repeat;
    background-attachment: fixed;
	filter: blur();
}
p
{
	color:white;
}
input
{
	color:blue;
}
#forms{
	padding: 15% 0%;
}
.header{
	float: left;
	text-align: center;
	padding: 20%;
	color: white;
	
}
.headertext {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal "alfa-slab-one", Helvetica, sans-serif;
  color: #ffffff;
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  text-shadow: 2px 2px 2px rgba(0,0,0,0.5) ;
}
.enjoy-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 14px/normal "basic", Helvetica, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(7,142,196,0.11);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.5) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.5) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}
.txt-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 3px 5px;
  border: 0 solid #b5b5b5;
  border-bottom: 1px solid #5b38c4;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 16px/normal "Times New Roman", Times, serif;
  color: rgba(0,142,198,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(255,255,255,0.7);
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}
td
{
	padding: 5px;
}
</style>
</head>
<body>
<?php 
include ('config.php');
setcookie('name','wew',time()-1800,'/');
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