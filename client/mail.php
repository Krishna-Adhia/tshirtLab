<?php
	//include 'generatepdf.php';
	//$mail = $_POST['MailAddress'];
?>

<?php
	//include 'con_addcontact.php';
	//$file_name = 'new.pdf';
	$to_email = 'tshirtlab9@gmail.com';
	//$subject = AddAttachment($file_name);
	$subject = "Tshirt Lab Contact Form";
	$body = "Your query has been received to us!! Action will be taken shortly.";
	$headers = "From: tshirtlab9@gmail.com";

	if(mail($to_email, $subject, $body, $headers))
	{
		echo "Email successfully send to" . $to_email;
	}
	
	else
	{
		echo"Email failed";
	}
?>