<?php
	require_once'classes/Product.php';
    $objproduct = new product();
    $result = $objproduct->delete($_GET);
    header("LOCATION: ListProduct.php");
?>