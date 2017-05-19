<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title>
Welcome to Our Home Page!
</title>
<style>
html
{
	background-color:#00BFFF;
}
.button2 {background-color:blue;}
.button {
    background-color:blue;
    border: none;
    color: white;
    padding: 35px 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 50px;
    margin: 4px 2px;
    cursor: pointer;
}
p, h3, h1
{
	color:white;
}
input
{
	color:blue;
}
marquee
{
	background-color:blue;
}
h2
{
	font-size: 50px;
	color:white;
}
</style>
</head>
<body>

<table align = "center">
<tr>
<td>
<h1>Jimuel Banawan</h1>
<img src = "jim.jpg" width = "250px" height = "250">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</td>
<td>
<h1>Daniel Benedict Malaki</h1>
<img src = "ben.jpg" width = "250" height = "250">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



</td>
<td>
<h1>Andrew Ang</h1>
<img src = "andrew.jpg" width = "250" height = "250">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</td>
<td>
<h1>Elton Castano</h1>
<img src = "elton.jpg" width = "250" height = "250">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</td>
</tr>
</table>
</marquee>
</br>
</br></br>
<center><button class="button button2"><a href = "http://localhost:8080/php-shopping-cart-master/" style ="color:white;">Buy here</a></button></center>
<center><button class="button button2"><a href = "sellform.php" style ="color:white;">Sell here</a></button></center>
<form name = "myForm">
<center>
<h3>Would you like to Log Out?</h3>
<input type = "hidden" value = "logout" name = "Lout" id = "Lout">
<input type = "button" value = "Log out" name = "logout" id = "logout" onClick = "validation()">
</center>
</form>
<form name = "myForm2" action = "login.php" method = "post">
<input type = "hidden" value = "" name = "Pout" id = "Pout">
</form>
<script>
function validation()
{
	var a = document.myForm.Lout.value;
		if(a=="")
		{
			alert(" ");
		}
		else
		{
			document.getElementById("Pout").value = a;
			document.myForm2.submit();
		}
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
<?php
echo $_COOKIE['name'];
	if(isset($_POST['Pout']))
	{
		$a = $_POST['Pout'];
		setcookie('name','wew',time()-1800,'/');
		header("Location:login.php");
	}
	else
	{
		echo "Error";
	}
?>