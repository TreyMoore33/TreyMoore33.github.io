<?php
// Include the database configuration file
include_once 'php/config.php';

// Perform database query to retrieve all users
$query = "SELECT * FROM users";
$result = $mysqli->query($query);

// Display user profiles
if ($result && $result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "<strong>User ID:</strong> " . $row['id'] . "<br>";
        echo "<strong>Name:</strong> " . $row['first_name'] . " " . $row['last_name'] . "<br>";
        echo "<strong>Email:</strong> " . $row['email'] . "<br>";
        // Display other user details as needed
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No users found.</p>";
}
?>
