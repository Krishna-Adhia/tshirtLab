 
<?php
	SESSION_START();
	//$total = $_GET[$total];
  $con = mysqli_connect("localhost","root","","tshirt_design") or die('Unable to connect to DataBase');
        //SESSION_START();
   $userid = $_SESSION['UserID'];
   
    //$subtotal = $_GET['subtotal'];
        $sql = "INSERT INTO orders (OrderID,UserID,PaymentMode) VALUES ('$userid','COD')";
echo $sql;
die();
     $result = mysqli_query($con,$sql);
    ?>
          