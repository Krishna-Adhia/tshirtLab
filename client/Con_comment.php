<?php
	require'C:\xampp\htdocs\localhost\t-shirtLab\admin\classes\Product.php';
    $objcart = new product();
    $result = $objcart->getByPK($_GET);
    header("LOCATION:single-product.php");
?>