<?php
	require'C:\xampp\htdocs\t-shirtLab\admin\classes\Wishlist.php';
    $objwishlist = new wishlist();
    $result = $objwishlist->delete($_GET);
    header("LOCATION:wishlist.php");
	
?>