<?php

include_once ("DBConfig.php");
class cart extends DBConfig
{
    function getAll()
    {
        $resultArray = array();
        $sql = "select * from cart";
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
        $sql = "select * from cart where cartID=$cartID";
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
		 
		 //check whether product exists in cart
		 $selectproduct = "select ProductID from cart where UserID = '$UserID' AND ProductID = '$ProductID'";
		 
		 $result = mysqli_query($this->con,$selectproduct);
		 
		 echo "<pre>";
		 $row=mysqli_fetch_assoc($result);
		 print_r($row);
		 
		 if(empty($row))
		 {
				
			 //$ProductID = $_SESSION['ProductID'];
				$select = "select * from product where ProductID = '$ProductID'";
				
				$result = mysqli_query($this->con,$select);	
				
				 while($row = mysqli_fetch_assoc($result))
				{
					$price  = $row['Price'];
					$image  = $row['Image'];
					$name   = $row['Description'];
					
				}
				
				 $sql = "INSERT INTO cart (UserID, ProductID,T_ShirtImg,T_ShirtName,Price,Quantity,TotalProduct) VALUES ('$UserID','$ProductID','$image','$name' ,'$price',0,0);";
				 
						
				if(mysqli_query($this->con,$sql))
				{
					return true;
				}
				else
				{
					return false;
				}
				
		 } 
		 else 
		 {
			 //echo "product exists";
			 header("location:shop.php?error=productexists");
			 exit();
		 }
			
	}
    function update($req)
    {
        extract($req);
        $sql = "UPDATE cart SET Quantity = $quantity,  SubTotal = $subtotal, Total = $total;";
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
        $sql = "DELETE FROM cart WHERE ProductID = $ProductID";
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

        $sql = "select * from cart where cartName = '$cartName' and Password ='$Password'";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
			$cartID = $row['cartID'];
			$_SESSION['cartID'] = $cartID;
			$_SESSION['cartName'] = $cartName;
            return true;
        }
        else{
            return false;
        }
    }

    function insert_cart($req)
    {
        extract($req);
        $UserID = $_SESSION['UserID'] ;
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            //File upload flag
            $fileUploadSuccess = false; 
            
            // Check if file was uploaded without errors
            if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                //$filename = $_FILES["photo"]["name"];
                $filename = time() . '_' . $_FILES["photo"]["name"];
                $filetype = $_FILES["photo"]["type"];
                $filesize = $_FILES["photo"]["size"];
            
                // Verify file extension
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
            
                // Verify file size - 5MB maximum
                $maxsize = 5 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
            
                // Verify MYME type of the file
                if(in_array($filetype, $allowed)){
                    // Check whether file exists before uploading it
                    if(file_exists("C:\\xampp\\htdocs\\localhost\\Project\\admin\\upload\\" . $filename)){
                        echo $filename . " is already exists.";
                    } else{
                        move_uploaded_file($_FILES["photo"]["tmp_name"], "C:\\xampp\\htdocs\\localhost\\t-shirtLab\\admin\\upload\\" . $filename);
                        echo "Your file was uploaded successfully.";
                        $fileUploadSuccess = true;
                        
                        //Insert into DB
                        
                        // $sql = "INSERT INTO cart (UserID, ProductID,T_ShirtImg,T_ShirtName,Price,Quantity,TotalProduct) VALUES ('$UserID','$ProductID','$image','$name' ,'$price',0,0);";
                        if(mysqli_query($this->con,$sql))
                        {
                            return true;
                        }
                        else{
                            return false;
                        }
                    } 
                } else{
                    echo "Error: There was a problem uploading your file. Please try again."; 
                }
            } else{
                echo "Error: " . $_FILES["photo"]["error"];
            }
        } //If Post
        
    }


}

?>