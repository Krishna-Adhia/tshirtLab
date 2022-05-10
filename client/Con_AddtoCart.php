<?php
	require'C:\xampp\htdocs\t-shirtLab\admin\classes\Cart.php';
    $objcart = new cart();
    $result = $objcart->insert($_GET);
    header("LOCATION:cart.php");	
    //include 'checkout.php';
?>