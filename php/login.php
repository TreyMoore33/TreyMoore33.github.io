<?php
// Database connection code here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($result) {
            // Start session and store user information
            session_start();
            $_SESSION["user_id"] = $result["user_id"];
            $_SESSION["email"] = $result["email"];
            // Redirect to dashboard or another page after successful login
            header("Location: index.html");
            exit();
        } else {
          header("Location: sign_in.html?error=1");
    exit();
}
}
?>
