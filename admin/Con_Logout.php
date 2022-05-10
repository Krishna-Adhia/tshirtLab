<?php
	session_start();
	if(isset($_SESSION['AdminName']))
	{
		session_destroy();
		header('Location:page-login.php');
	}
?>