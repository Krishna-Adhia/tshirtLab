<?php
	require'C:\xampp\htdocs\t-shirtLab\admin\classes\Cart.php';
    $objproduct = new cart();
    $result = $objproduct->delete($_GET);
    header("LOCATION:cart.php");
	
?>