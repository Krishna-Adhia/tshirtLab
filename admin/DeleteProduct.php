<?php
	include_once ("classes/Product.php");
	$obj = new product();

	$obj->delete($_GET);
    header("Location: ListProduct.php");
?>