<?php
// Database connection code here

session_start();
$user_id = $_SESSION["user_id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $education = $_POST["education"];
    $job_experience = $_POST["job_experience"];
    $personal_description = $_POST["personal_description"];


    header("Location: account_details.html");
    exit();
}
?>
