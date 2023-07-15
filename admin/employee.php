<title>Employee</title>
<div id="main">
  <link rel="stylesheet" href="../assets/css/employee.css">
  <!-- title page and search bar  -->
  <div class="d-flex justify-content-between align-items-center mx-2">
    <div>
      <p class="text-center lead ms-3 mt-3">
      <h3 class="mx-2"><span id="jobCount"></span> Employees</h3>
    </div>
    <form class="d-flex forms my-3">
      <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addEmployee">
        <i class="fa-solid fa-user-plus"></i>
      </button>
      <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for Employee">
    </form>
  </div>

  <!-- main content -->
  <div class="container-fluid">
    <div id="jobsContainer" class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-start align-items-center">
      <!-- card content -->
      <?php
      // Assuming you have established a database connection

      // Retrieve data from the table
      $query = "SELECT * FROM employees LIMIT 12"; // Limit the query to retrieve 12 rows (4 columns x 3 rows)
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
          $file_path = $row['file_path'];
          $trimmed_path = str_replace("C:/xampp/htdocs/HR-Management-System/uploads", "../uploads", $file_path);

          $dateHired = date('m / d / Y', strtotime($row['date_hired'])); // Format date as 'YYYY-MM-DD'

          // Generate the HTML for each card dynamically
          echo '
              <div class="col mb-4">
                <div class="card mx-2">
                  <div class="col-md-auto d-flex justify-content-end mb-4">
                    <button type="button" class="btn rounded-pill edit-button justify-content-end" data-bs-toggle="modal" data-bs-target="#employeeModal" data-id="' . $id . '" data-name="' . $name . '" data-contact="' . $contact . '" data-date-hired="' . $dateHired . '">
                      <i class="fa-solid fa-ellipsis fa-xl" style="color: #ec5b33;"></i>
                    </button>
                  </div>
                  <div class="card-container">
                    <img src="' . $trimmed_path . '" class="mb-3" width="150" height="150">
                    <h5 class="card-title text-muted">' . $department . '</h5>
                    <p class="card-text" data-id="' . $id . '"></p>
                    <p class="card-text">Name: ' . $name . '</p>
                    <p class="card-text">Contact: ' . $contact . '</p>
                    <p class="card-text">Date Hired: ' . $dateHired . '</p>
                  </div>
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
</div>
<?php include '../admin/modals/employee-modal.php' ?>

</div>