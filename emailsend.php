<?php
ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);
ini_set('sendmail_from', 'galgundesanika@gmail.com');

$to = "sbgalgunde@gmail.com";
$subject = "Test Email";
$message = "Hello! This is a test email.";
$headers = "From: galgundesanika@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
