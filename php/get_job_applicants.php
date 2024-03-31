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
