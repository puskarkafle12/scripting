<?php
$to = "recipient@example.com";
$subject = "Test Email";
$message = "This is a test email sent from PHP.";
$headers = "From: sender@example.com";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email. Check your configuration.";
}
?>
