<?php
	require_once'classes/Product.php';
    $objproduct = new Product();
    $result = $objproduct->insert($_POST);
    header("LOCATION:../client/shop.php");
	
?>