<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$email_from = 'ahmad-space.bitbucket.io';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $email.\n".
              "Subject: $subject.\n".
              "Message: $message.\n";

$to = 'ahmadhumayun.k@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>