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
        extract($req);
		SESSION_START();
		$userid = $_SESSION['UserID'];
		$total = $_GET['total'];
		//$subtotal = $_GET['subtotal'];
        $sql = "INSERT INTO orders (OrderID,UserID,PaymentMode,Total)
		VALUES ('$userid','COD','$total')";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }
    function update($req)
    {
        extract($req);
        $sql = "UPDATE orders SET FirstName = '$ordersName', LastName = '$Password', ordersName = '$FirstName', Password = '$MiddleName', ordersEmail = '$LastName'WHERE ordersID = $ordersID;";
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

        $sql = "DELETE FROM orders WHERE ordersID = $ordersID";
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
	
	function ChangePassword($req)
    {
		extract($req);
		$sql = "select * from orders where ordersID = $ordersID";
		$result = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_assoc($result);
		if($_POST['OldPassword'] == $row['Password'])
        {
				$update = "UPDATE orders set Password = '$NewPassword' where ordersID = '$ordersID'";
				$query = mysqli_query($this->con,$update);
				//die();
				header("Location: index.php");
        }
        else
		{
			header("Location: change_password.php");
        }
    }
}
?>