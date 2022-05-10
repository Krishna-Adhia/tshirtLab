<?php
	session_start();
	include 'classes/Admin.php';
	$objadmin = new admin();
	$objadmin->ChangePassword($_POST);
?>