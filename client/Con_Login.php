<?php
	session_start();
	include'C:\xampp\htdocs\t-shirtLab\admin\classes\User.php';
	$objuser = new user();
	if($objuser->CheckLogin($_POST))
	{
		header("Location:index.php");
	}
	else
	{
		header("Location:login.php");
	}


?>