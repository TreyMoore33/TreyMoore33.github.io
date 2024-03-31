<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>
<link rel="stylesheet" href="css\style.css">
</head>
<body>
  <div class="header">
    <div class="logo">
      <img src="img\logo.jpg" alt="Company Logo" class="logo-img">
    </div>
  <ul class="nav-links">
    <li><a href="index.html">Home</a></li>
    <li><a href="apply.php">Applicant Search</a></li>
    <li><a href="job.php">Job Search</a></li>
    <li><a href="profile.html">Manage Profile</a></li>
    <li><a href="contact.html">Contact Us</a></li>
  </ul>
  <div class="search-bar">
    <input type="text" placeholder="Search for jobs..." onkeydown="if(event.keyCode==13) event.preventDefault()">
    <button onclick="search()">Search</button>
  </div>

<center>
  <div class="user-list">
     <h2>User Profiles</h2>
     <?php
     // Perform database query to retrieve all users
     include_once 'php\config.php';
     $query = "SELECT * FROM users";
     $result = $mysqli->query($query);

     // Display user profiles
     if($result && $result->num_rows > 0) {
       echo "<ul>";
       while($row = $result->fetch_assoc()) {
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
   </div>
</center>
  <footer>
    <center>
      Trey Moore (110063158) - 2024
    </center>
  </footer>
</body>

</html>