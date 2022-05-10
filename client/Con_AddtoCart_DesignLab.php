<?php
	require'C:\xampp\htdocs\localhost\t-shirtLab\admin\classes\Cart.php';
    $objcart = new cart();
    $result = $objcart->insert_cart($_GET);
    header("LOCATION:cart.php");	
?>