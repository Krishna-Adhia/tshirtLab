<?php
	require_once'C:\xampp\htdocs\t-shirtLab\admin\classes\Cart.php';
    $objproduct = new updatecart();
    $result = $objproduct->update($_GET);
    //header("LOCATION: ListProduct.php");
?>