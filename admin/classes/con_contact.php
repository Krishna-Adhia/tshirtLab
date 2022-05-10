<?php
	session_start();
	$UserName = $_SESSION['User_Name'];
	$From = $_POST['email_address'];
	$to = 'cozastoree@gmail.com';
	$Subject = $_POST['email_subject'];
	$Message = $_POST['message'];
	$headers = 'From: ' .$From . "\r\n". 


	mail($to,$Subject,$Message);
	header("location:thanks.php");
?>



