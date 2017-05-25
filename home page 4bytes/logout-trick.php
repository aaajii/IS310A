<?php
	if(!isset($_COOKIE['username']))
	{
		header("Location:hp.php");
	}
	else
	{
		setcookie('username','wew',time()-900000,'/');
		header("Location: /IS310A/login/newLogin.php");
	}
?>