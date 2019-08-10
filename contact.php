<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$number = $_POST['number'];
	$Datetime = $_POST['Datetime'];
	$Message = $_POST['Message'];
	$subject = $_POST['subject'];
	
	$email_from = 'Great God Events Hall';
	$email_subject = 'New Message from GG Events Hall Contact';
	$email_body = "name: name.\n".
				  "email: email.\n".
				  "phone: phone.\n".
				  "number: number.\n".
				  "Date and time: Datetime.\n".
				  "subject: subject.\n".
				  "Message: Message.\n";
				 
	$to ="tulk2aku22@gmail.com";
	$headers ="From: $email_from \r\n";
	$headers .="Reply-To: $email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("location: index.html");
	
?>