<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];

    $to = "avilariosdiego@gmail.com"; //Cambia esto al correo del destinatario
    $subject = "";
    $message = "Name: $name\nPhone Number: $number\nE-mail: $email";

    // Envío del correo
    mail($to, $subject, $message);

    echo "Sent successfully.";
}
?>