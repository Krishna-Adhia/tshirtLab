<?php
include_once ("DBConfig.php");
class wishlist extends DBConfig
{
    function getAll()
    {
        $resultArray = array();
        $sql = "select * from wishlist";
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
        $sql = "select * from wishlist where wishlistID=$wishlistID";
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
        $sql = "INSERT INTO wishlist (UserID, ProductID, ProductImg, ProductName, ProductPrice) VALUES ('$UserID','$ProductID','$image','$name' ,'$price');";
		
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
        $sql = "UPDATE wishlist SET wishlistName = '$wishlistName', Password = '$Password', FirstName = '$FirstName', LastName = '$LastName', Email = '$Email' WHERE wishlistID = $wishlistID;";
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

        $sql = "DELETE FROM wishlist WHERE ProductID = '$ProductID'";
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

        $sql = "select * from wishlist where wishlistName = '$wishlistName' and Password ='$Password'";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
			$wishlistID = $row['wishlistID'];
			$_SESSION['wishlistID'] = $wishlistID;
			$_SESSION['wishlistName'] = $wishlistName;
            return true;
        }
        else{
            return false;
        }
    }


}

?>