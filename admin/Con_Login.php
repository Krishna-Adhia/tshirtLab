<?php
	session_start();
	include 'classes/Admin.php';
	$objadmin = new admin();
	if($objadmin->CheckLogin($_POST))
	{
		header("Location:index.php");
	}
	else
	{
		header("Location:page-login.php");
	}


?>