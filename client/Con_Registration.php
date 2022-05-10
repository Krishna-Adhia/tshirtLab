<?php
	include'C:\xampp\htdocs\t-shirtLab\admin\classes\User.php';
    $objuser = new User();
    $result = $objuser->insert($_POST);
    header("LOCATION:login.php");
?>