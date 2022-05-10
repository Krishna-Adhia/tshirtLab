<?php
include_once ("DBConfig.php");
class user extends DBConfig
{
    function getAll()
    {
        $resultArray = array();
        $sql = "select * from user";
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
        $sql = "select * from user where UserID=$UserID";
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
        $sql = "INSERT INTO user (UserName, Password, FirstName, LastName, Email) VALUES ('$UserName', '$Password', '$FirstName', '$LastName', '$Email');";
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
        $sql = "UPDATE user SET UserName = '$UserName', Password = '$Password', FirstName = '$FirstName', LastName = '$LastName', Email = '$Email' WHERE UserID = $UserID;";
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

        $sql = "DELETE FROM user WHERE UserID = $UserID";
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

        $sql = "select * from user where UserName = '$UserName' and Password ='$Password'";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
			$UserID = $row['UserID'];
			$_SESSION['UserID'] = $UserID;
			$_SESSION['UserName'] = $UserName;
            return true;
        }
        else{
            return false;
        }
    }


}

?>