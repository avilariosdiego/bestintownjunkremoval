<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "youremail@example.com"; // Change this to the recipient's email address
    $subject = "New message from the contact form";
    $message_content = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $message_content, $headers)) {
        echo "Form submitted successfully. Thank you for contacting us.";
    } else {
        echo "There was a problem submitting the form. Please try again.";
    }
}
?>
