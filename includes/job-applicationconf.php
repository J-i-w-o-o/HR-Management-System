<?php
include '../includes/db.php';
      // Fetch data from the "job_application" table
      $sql = "SELECT * FROM job_applications";
      $result = mysqli_query($connection, $sql);

      // Display the data in table rows
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['firstname'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['mobile'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td></td>";
          echo "<td> <button type='button' id='btnclose' class='btn'><i class='fa-solid fa-square-check' style='color: #149016;'></i></button><button type='button' class='btn no-border'> <i class='fa-solid fa-square-xmark' style='color: #a61111;'></i></button></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='8'>No job applications found.</td></tr>";
      }

      // Close the database connection
      mysqli_close($connection);
      ?>