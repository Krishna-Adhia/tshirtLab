<?php
	include 'classes/Product.php';
	$objproduct = new Product();
	$result = $objproduct ->update($_POST);
	header("Location: ListProduct.php");
?>