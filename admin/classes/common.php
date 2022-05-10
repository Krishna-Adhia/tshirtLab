<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="tlogo.jpg" type="image/icon type">
</head>

</html>
<!--check whether user is logged in or not-->
<?php
	session_start();
	if(!isset($_SESSION['AdminName']))
	{
		header('Location:page-login.php');
		exit();
	}
?>
<!--log in over-->