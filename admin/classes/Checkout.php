<?php
include_once ("DBConfig.php");
class orders extends DBConfig
{
    function getAll()
    {
        $resultArray = array();
        $sql = "select * from orders";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function getByPK($req)
    {
        extract($req);
        $resultArray = array();
        $sql = "select * from orders where ordersID=$ordersID";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
            return $row;
        }
        return false;
    }

     function insert($req)
    {
       
		//take all values in a variable
		extract($req);
		SESSION_START();
		 $UserID = $_SESSION['UserID'] ;
		 //$ProductID = $_SESSION['ProductID'];
		$select = "select * from product where ProductID = '$ProductID'";
		
		$result = mysqli_query($this->con,$select);	
		
		 while($row = mysqli_fetch_assoc($result))
        {
            $price  = $row['Price'];
			$image  = $row['Image'];
			$name   = $row['Description'];
			
        }
        $sql = "INSERT INTO orders (UserID, PaymentMode, SubTotal, Total, DeliveryAddress) VALUES ('$UserID','$sub_total','$total')";
		
		echo $sql;
		die();
		
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
		//SESSION_DESTROY();
    }
	
	
    function update($req)
    {
        extract($req);
        $sql = "UPDATE orders SET ordersName = '$ordersName', Password = '$Password', FirstName = '$FirstName', LastName = '$LastName', Email = '$Email' WHERE ordersID = $ordersID;";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }

    function delete($req)
    {
        extract($req);

        $sql = "DELETE FROM orders WHERE ProductID = '$ProductID'";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }
	
	 function CheckLogin($req)
    {
        extract($req);

        $sql = "select * from orders where ordersName = '$ordersName' and Password ='$Password'";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
			$ordersID = $row['ordersID'];
			$_SESSION['ordersID'] = $ordersID;
			$_SESSION['ordersName'] = $ordersName;
            return true;
        }
        else{
            return false;
        }
    }


}

?>