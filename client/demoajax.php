<?php
	

	$uid = $_POST['uid'];
	$productid = $_POST['productid'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	//echo $uid.$qty.$productid;

	//Update the data

	$con = mysqli_connect("localhost","root","","tshirt_design");
	$update = "UPDATE cart SET Quantity = $qty, Price = $price WHERE UserID = $uid AND ProductID = $productid";
	mysqli_query($con,$update);

?>