<?php
include_once ("DBConfig.php");
class product extends DBConfig
{
    function getAll()
    {
        $resultArray = array();
        $sql = "select * from product";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }
	
	  function select($req)
    {
		extract($req);
		
        $sql = "select * from product where ProductID = $ProductID";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            return $row;
        }
        
    }

    function getByPK($req)
    {
        extract($req);
        $resultArray = array();
        $sql = "select * from product where ProductID = $ProductID";
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
					if(file_exists("C:\\xampp\\htdocs\\t-shirtLab\\Project\\admin\\upload\\" . $filename)){
						echo $filename . " is already exists.";
					} else{
						move_uploaded_file($_FILES["photo"]["tmp_name"], "C:\\xampp\\htdocs\\t-shirtLab\\admin\\upload\\" . $filename);
						echo "Your file was uploaded successfully.";
						$fileUploadSuccess = true;
						
						//Insert into DB
						
						$sql = "INSERT INTO product (Image, Gender, Price, Description) VALUES ('$filename', '$Gender', '$price', '$description');";
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
		
		die();
		
    }
    function update($req)
    {
        extract($req);
		if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0)
		{
				$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
				//$filename = $_FILES["photo"]["name"];
				$filename = time() . '_' . $_FILES["photo"]["name"];
				$filetype = $_FILES["photo"]["type"];
				$filesize = $_FILES["photo"]["size"];
				
				if(file_exists("C:\\xampp\\htdocs\\localhost\\Project\\admin\\upload\\" . $filename)){
						echo $filename . " is already exists.";
					} else{
						move_uploaded_file($_FILES["photo"]["tmp_name"], "C:\\xampp\\htdocs\\localhost\\Project\\admin\\upload\\" . $filename);
						echo "Your file was uploaded successfully.";
						$fileUploadSuccess = true;
					}
				
				$sql = "UPDATE product SET Image = '$filename', Gender = '$Gender', Price = '$price', Description = '$description' WHERE ProductID = $ProductID;";
				//echo $sql;
				//die();
				if(mysqli_query($this->con,$sql))
				{
					return true;
					echo"true";
					die();
				}
				else
				{
					return false;
					echo"false";
					die();
				}
		}
		
		else
		{
			$sql = "UPDATE product SET Gender = '$Gender', Price = '$price', Description = '$description' WHERE ProductID = $ProductID;";
				if(mysqli_query($this->con,$sql))
				{
					return true;
				}
				else
				{
				return false;
				}
		}
    }

    function delete($req)
    {
        extract($req);

        $sql = "DELETE FROM product WHERE ProductID = $ProductID";	
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }
	
	function deletefromcart($req)
	{
		extract($req);
		$sql = "DELETE FROM cart where ProductID = $ProductID";
		if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
	}
	
	function getcart($req)
	{
		extract($req);
		$sql = "DELETE FROM cart where ProductID = $ProductID";
		if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
	}
	
	/*function getproductimg($req)
	{
		extract($req);
		$sql = "select Image from product where ProductID = <?php echo ($row['ProductID']);?>";
		if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
	}*/


}

?>