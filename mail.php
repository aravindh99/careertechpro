<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "careertechpro@outlook.com"; 
    $subject = $_POST["subject"];
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Phone: " . $_POST["phone"] . "\n";
    $message .= "Message:\n" . $_POST["message"];
    $headers = "From: contact@yourdomain.com\r\n";
$headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>