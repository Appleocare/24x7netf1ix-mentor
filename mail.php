<?php

$to = 'appleoapps7@gmail.com';
$subject = 'Enquiry;
$message = '
<html>
<head>
  <title>Enquiry</title>
</head>
<body>
  <p>Here is an image embedded in this email:</p>
  <img src="img/logo.png" alt="Embedded Image">
</body>
</html>
';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <sender@example.com>' . "\r\n";
$headers .= 'Reply-To: <sender@example.com>' . "\r\n";

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>