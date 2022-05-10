<?php

 	$pid = $_GET['ProductID'];
 	$ucomment = $_POST['Comment'];

 	$con = mysqli_connect("localhost","root","","tshirt_design") or die('Unable to connect to DataBase');
 	SESSION_START();
		$userid = $_SESSION['UserID'];
		$username = $_SESSION['UserName'];
        $sql = "INSERT INTO comment (ProductID, UserID, UserName, ProductComment) VALUES ('$pid','$userid','$username', '$ucomment');";

		$result = mysqli_query($con,$sql) or die('Unable to implement query');
	header("Location: single-product.php?ProductID=$pid");
?>