<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "moore33@uwindsor.ca";

    $email_subject = "Message from Contact Us Form: $subject";

    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    $headers = "From: $name <$email>";

    if (mail($to, $email_subject, $email_message, $headers)) {

        http_response_code(200);
    } else {

        http_response_code(500);
    }
} else {

    http_response_code(405); 
}
?>
