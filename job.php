<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content= "width=device-width, initial scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="css/style.css">
  <title>RecruitRite: Welcome</title>

  <style>
      /* CSS for the job posting form */
      .job-posting-form {
        width: 50%;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
      }

      .job-posting-form h2 {
        text-align: center;
      }

      .job-posting-form label {
        display: block;
        margin-bottom: 10px;
      }

      .job-posting-form input[type="text"],
      .job-posting-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      .job-posting-form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #025C64;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .job-posting-form button:hover {
        background-color: #DB7C7C;
      }
    </style>

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
  </div>
  <center>

      <?php
      include_once 'php\config.php';
      // Start the session to access session variables
      session_start();

      // Check if the user is logged in and their role is "recruiter"
      if(isset($_SESSION['role']) && $_SESSION['role'] === 'recruiter') {
          // User is a recruiter, show the job posting form
      ?>

<div class="job-posting-form">
    <h2>Upload Job Posting</h2>
    <form action="upload_job.php" method="POST">
      <div>
        <label for="job-title">Job Title:</label>
        <input type="text" id="job-title" name="job_title" required>
      </div>
      <div>
        <label for="pay">Pay:</label>
        <input type="text" id="pay" name="pay">
      </div>
      <div>
        <label for="job-description">Job Description:</label>
        <textarea id="job-description" name="job_description" rows="4" required></textarea>
      </div>
      <div>
        <label for="experience-needed">Experience Needed (years):</label>
        <input type="text" id="experience-needed" name="experience_needed">
      </div>
      <div>
        <label for="shifts">Shifts:</label>
        <input type="text" id="shifts" name="shifts">
        <p class="description">Please specify available shifts (e.g., full-time, part-time, seasonal). Use "available upon request" or "N/A" where applicable.</p>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>

  <div class="job-search-results">
<?php
      // Perform database query to retrieve all job postings
      // Assuming $mysqli is your database connection
      $query = "SELECT * FROM job_postings";
      $result = $mysqli->query($query);

      // Display search results
      if($result && $result->num_rows > 0) {
        echo "<h3>All Job Postings:</h3>";
        while($row = $result->fetch_assoc()) {
          echo "<p>Job Title: " . $row['job_title'] . "</p>";
          echo "<p>Job Description: " . $row['job_description'] . "</p>";
          // Display other job details as needed
          echo "<hr>";
        }
      } else {
        echo "<p>No job postings found.</p>";
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