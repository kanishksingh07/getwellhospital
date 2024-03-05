<?php
$name = $_POST['name'];
$visior_email = $_POST['email'];
$subject = $_POST['subject'];
$message =  $_POST['message'];

$email_from = 'xyz@gmail.com';
$email_subject = 'appointment booking'
$email_body = "user Name: $name.\n".
               "user email: $visitor_emsil.\n".
               "subject: $subject.\n".
               "user message: $message .\n";
 $to = 'skanishksingh07@gmail.com';
 
 $headers = "From: $email_from \r\n";

 $headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>