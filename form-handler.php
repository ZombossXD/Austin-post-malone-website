<?php
$name = $_POST['name'];
$Visitor_email = $_POST['email'];
$subjct = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name. /n".
			   "User Email: $Visitor_email. /n".
			    "Subject: $subject. /n".
			    "User Message: $message ./n";

$to = 'jjwestlake2005@gmail.com';

$headers = "From: $email_from /r/n";

$headers .= "Reply-to: $Visitor_email /r/n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html");



?>