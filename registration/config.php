<?php
	$db_name = "fourbytes";
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "usbw";
	$conn = new mysqli($db_host,$db_username,$db_password,$db_name);
	if($conn -> connect_error)
	{
		echo "Mysql Error: ". connect_error;
	}
?>