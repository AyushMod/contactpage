<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'website@gmail.com';
$email_subject = 'New Form submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message.\n";

$to = 'ayushmodi@gmail.com';

$headers = "From: $visitor_email \r\n"

$headers .= "Reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>
