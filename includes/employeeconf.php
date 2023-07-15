
<div class="container-fluid">
  <div id="jobsContainer" class="row justify-content-center align-items-center">
    <!-- card content -->
    <?php
    // Assuming you have established a database connection

    // Retrieve data from the table
    $query = "SELECT * FROM employees";
    $result = mysqli_query($connection, $query);
    $employeeCount = mysqli_num_rows($result);

    // Check if there are any rows in the table
    if (mysqli_num_rows($result) > 0) {
      // Iterate over each row and generate the card dynamically
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $department = $row['department'];
        $contact = $row['contact'];
        $dateHired = date('m / d / Y', strtotime($row['date_hired'])); // Format date as 'YYYY-MM-DD'

        // Generate the HTML for each card dynamically
        echo '

        <div class="col-sm-6 col-md-4">
          <div class="card">
          <div class="col-md-auto d-flex justify-content-end mb-4 width="150" height="150"">
            <button type="button" class="btn rounded-pill edit-button justify-content-end" data-bs-toggle="modal" data-bs-target="#employeeModal" data-id="' . $id . '" data-name="' . $name . '" data-contact="' . $contact . '" data-date-hired="' . $dateHired . '"><i class="fa-solid fa-ellipsis fa-xl" style="color: #ec5b33;"></i></button>
          </div>
          <img src="../assets/images/addicon.png" class="mb-3" width="auto" height="auto">
            <h5 class="card-title text-muted">' . $department . '</h5>
            <p class="card-text" data-id="' . $id . '"></p>
            <p class="card-text">Name: ' . $name . '</p>
            <p class="card-text">Contact: ' . $contact . '</p>
            <p class="card-text">Date Hired: ' . $dateHired . '</p>
          </div>
        </div>
        ';
      }
    } else {
      // Handle case when there are no rows in the table
      echo '<p>No data available.</p>';
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
  </div>
</div>
