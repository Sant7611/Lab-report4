<?php
$to_email = "surveerqwer123@gmail.com";
$subject = "Test Email";
$body = "This is a test email sent from a PHP script.";

$headers = "From: sbohara579@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email";
} else {
    echo "Email sending failed...";
}
