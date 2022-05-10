<?php
	require'C:\xampp\htdocs\t-shirtLab\admin\classes\Wishlist.php';
    $objcart = new wishlist();
    $result = $objcart->insert($_GET);
    header("LOCATION:shop.php");
    
?>