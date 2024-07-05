<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['sunject'];
$message = $_POST['message'];

$email_from= 'tushark22101@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                 "User Email: $vistior_email.\n".
                 "Subject: $subject.\n".
                 "User Message: $message.\n";

$to = 'tushaars1300@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$header);

header("Location: contact.html");

?>