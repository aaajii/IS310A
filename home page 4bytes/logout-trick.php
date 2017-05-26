<?php
	if(!isset($_COOKIE['username']))
	{
		header("Location:hp.php");
	}
	else
	{
		setcookie('username','wew',time()-99999,'/');
		header("Location: /IS310A/login/newLogin.php");
	}
?>