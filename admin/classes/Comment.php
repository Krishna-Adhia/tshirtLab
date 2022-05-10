<?php
include_once ("DBConfig.php");
class comment extends DBConfig
{
    function getAll()
    {
        $resultArray = array();
        $sql = "select * from comment";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }
	
	function select($req)
    {
		$resultArray = array();
		extract($req);

        $sql = "select * from comment where ProductID = $ProductID";
        echo $sql;
        die();
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
        $sql = "select * from comment where commentID=$commentID";
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
		$username = $_SESSION['UserName'];
        $sql = "INSERT INTO comment (ProductID, UserID, UserName, ProductComment) VALUES ('$ProductID','$userid','$username', '$Comment');";
        
		echo $sql;
		die();
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
        $sql = "UPDATE comment SET commentName = '$commentName', Password = '$Password', FirstName = '$FirstName', LastName = '$LastName', Email = '$Email' WHERE commentID = $commentID;";
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

        $sql = "DELETE FROM comment WHERE commentID = $commentID";
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

        $sql = "select * from comment where commentName = '$commentName' and Password ='$Password'";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
			$commentID = $row['commentID'];
			$_SESSION['commentID'] = $commentID;
			$_SESSION['commentName'] = $commentName;
            return true;
        }
        else{
            return false;
        }
    }


}

?>