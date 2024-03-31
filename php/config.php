<?php
define('DB_HOST', 'localhost:3306');
define('DB_USER', 'trey');
define('DB_PASS', 'mypasswd');
define('DB_NAME', 'comp');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
