<!DOCTYPE html>
<?php
if(isset($_COOKIE['email']))
{
	?>
<html>
<head>
<title>
Welcome to Our Home Page!
</title>
<link rel="stylesheet" type="text/css" href="homeDesign.css">

</head>

<body>

<table align = "center">
<tr>
<td>
<h1>Jimuel Banawan</h1>
<img src = "images/jim.jpg" width = "250px" height = "250">


</td>
<td>
<h1>Daniel Benedict Malaki</h1>
<img src = "images/ben.jpg" width = "250" height = "250">



</td>
<td>
<h1>Andrew Ang</h1>
<img src = "images/andrew.jpg" width = "250" height = "250">


</td>
<td>
<h1>Elton Castano</h1>
<img src = "images/elton.jpg" width = "250" height = "250">

</td>
</tr>
</table>
</marquee>
</br>
</br>
</br>
<center><button class="button button2"><a href = "/IS310A/products/products.php" style ="color:white;">Buy here</a></button></center>

<center><button class="button button2"><a href = "/IS310A/selling/sellform.html" style ="color:white;">Sell here</a></button></center>

<form name = "myForm" method="post" action="<?php $_SERVER['PHP_SELF']?>">
<center>
<h3>Would you like to Log Out?</h3>
<input type = "hidden" value = "logout" name = "Lout" id = "Lout">
<input type = "submit" value = "Log out" name = "logout" id = "logout">
</center>
</form>
</body>

</html>
<?php
}else{header("Location: /IS310A/login/login.php");}
if(isset($_POST['Lout']))
{
	$a = $_POST['Pout'];
	setcookie('email','wew',time()-86400,'/');
	header("Location: /IS310A/login/login.php");
}
?>