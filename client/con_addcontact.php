<?php
	require'C:\xampp\htdocs\t-shirtLab\admin\classes\Contact.php';
    $objcontact = new contact_form();
    $result = $objcontact->insert($_POST);
    
	header("Location:contact_successfully.php");
	
?>