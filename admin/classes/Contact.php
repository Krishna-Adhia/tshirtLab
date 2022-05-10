<?php
include_once ("DBConfig.php");
class contact_form extends DBConfig
{
    function getAll()
    {
        $resultArray = array();
        $sql = "select * from contact_form";
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
        $sql = "select * from contact_form where contact_formID=$contact_formID";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
            return $row;
        }
        return false;
    }

     function insert($req)
    {
		SESSION_START();
       extract($req);
		$userid = $_SESSION['UserID'];
        $name = $_POST['name'];
        $MailAddress = $_POST['MailAddress'];
		
	 
        $sql = "INSERT INTO contact_form (UserID, UserName, UserEmail, Subject, Message) VALUES ('$userid','$name','$MailAddress','$subject' ,'$message');";
		
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
        $sql = "UPDATE contact_form SET contact_formName = '$contact_formName', Password = '$Password', FirstName = '$FirstName', LastName = '$LastName', Email = '$Email' WHERE contact_formID = $contact_formID;";
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

        $sql = "DELETE FROM contact_form WHERE ProductID = '$ProductID'";
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

        $sql = "select * from contact_form where contact_formName = '$contact_formName' and Password ='$Password'";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
			$contact_formID = $row['contact_formID'];
			$_SESSION['contact_formID'] = $contact_formID;
			$_SESSION['contact_formName'] = $contact_formName;
            return true;
        }
        else{
            return false;
        }
    }


}

?>