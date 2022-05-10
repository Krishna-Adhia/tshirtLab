<?php 
		//take all values in a variable
		$db=mysql_connect("localhost","root","","tshirt_design") or
	die('Unable to connect, please check the parameters');
	
	mysql_select_db('dwpd',$db) or die(mysql_error($db));
		SESSION_START();
		 $UserID = $_SESSION['UserID'] ;
		 $subtotal = $_SESSION['sub_total'];
		 $total = $_SESSION['totals'];
		 //$ProductID = $_SESSION['ProductID'];
		/*$select = "select * from product where ProductID = '$ProductID'";
		
		$result = mysqli_query($this->con,$select);	
		
		 while($row = mysqli_fetch_assoc($result))
        {
            $price  = $row['Price'];
			$image  = $row['Image'];
			$name   = $row['Description'];
			
        }*/
        $sql = "INSERT INTO orders (UserID, PaymentMode, SubTotal, Total, DeliveryAddress) VALUES ($UserID,$subtotal,$total)";
		
		
		
        if(mysqli_query($db,$sql))
        {
            return true;
			SESSION_DESTROY();
        }
        else{
            return false;
        }
		//
?>