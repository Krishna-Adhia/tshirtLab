<?php
include_once ("DBConfig.php");
class admin extends DBConfig
{
    function getAll()
    {
        $resultArray = array();
        $sql = "select * from admin";
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
        $sql = "select * from admin where AdminID=$AdminID";
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
        $sql = "INSERT INTO admin (FirstName,LastName,AdminName,Password,AdminEmail)
		VALUES ('$FirstName','$LastName','$AdminName','$Password','$Email')";
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
        $sql = "UPDATE admin SET FirstName = '$adminName', LastName = '$Password', AdminName = '$FirstName', Password = '$MiddleName', AdminEmail = '$LastName'WHERE AdminID = $AdminID;";
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

        $sql = "DELETE FROM admin WHERE AdminID = $AdminID";
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

        $sql = "select * from admin where AdminName = '$AdminName' and Password ='$Password'";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
			$AdminID = $row['AdminID'];
			$_SESSION['AdminID'] = $AdminID;
			$_SESSION['AdminName'] = $AdminName;
            return true;
        }
        else{
            return false;
        }
    }
	
	function ChangePassword($req)
    {
		extract($req);
		$sql = "select * from admin where AdminID = $AdminID";
		$result = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_assoc($result);
		if($_POST['OldPassword'] == $row['Password'])
        {
				$update = "UPDATE admin set Password = '$NewPassword' where AdminID = '$AdminID'";
				$query = mysqli_query($this->con,$update);
				header("Location: index.php");
        }
        else
		{
			header("Location: change_password.php");
        }
    }
}
?>