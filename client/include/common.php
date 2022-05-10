<!--check whether user is logged in or not-->
<?php
	session_start();
	if(!isset($_SESSION['UserName']))
	{
		header('Location:login.php');
		exit();
	}
?>
<!--log in over-->