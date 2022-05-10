<?php 

	SESSION_START();
	
	include 'generatepdf.php';

	//Insert in orders table

	$userid = $_SESSION['UserID'];
	$total = $_POST['totals'];
	$con = mysqli_connect("localhost","root","","tshirtdesign");
	$insertquery = "INSERT INTO orders (UserID, PaymentMode, Total) VALUES ($userid,'COD',$total)";
	
	mysqli_query($con, $insertquery);


?> 

