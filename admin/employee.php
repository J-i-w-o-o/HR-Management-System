<title>Employee</title>
<link rel="stylesheet" href="../assets/css/employee.css">
<?php include '../admin/modals/job-listing-modal.php' ?>


<div id="main">

    <!-- title page and search bar  -->
    <div class="d-flex justify-content-between align-items-center mx-2">
      <div>
        <p class="text-center lead ms-3 mt-3">
       <h3 class="mx-2"><span id="jobCount"></span> Employees</>
      </div>
      <form class="d-flex forms my-3">
        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addEmployee"><i class="fa-solid fa-user-plus"></i></button>
        <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for Employee">
      </form>
    </div>

    <!-- main content -->
    
    <div class="container-fluid">
      <div id="jobsContainer" class="row justify-content-center align-items-center">
        <!-- card content -->
        <div class="col-md-auto d-flex">
          <?php
          // Assuming you have established a database connection

          // Retrieve data from the table
          $query = "SELECT * FROM employees";
          $result = mysqli_query($connection, $query);
          $employeeCount = mysqli_num_rows($result);
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
              $dateHired = date('Y-m-d', strtotime($row['date_hired'])); // Format date as 'YYYY-MM-DD'

              // Generate the HTML for each card dynamically
              echo '
              
                <div class="card mx-2">
                  <div class="card-container">
                  <img  src="path_to_your_image.jpg" width="150" height="150">
                    <h5 class="card-title text-muted">'.$department.'</h5>
                    <p class="card-text" data-id="' . $id . '"></p>
                    <p class="card-text">Name: ' . $name . '</p>
                    <p class="card-text">Contact: ' . $contact . '</p>
                    <p class="card-text">Date Hired: ' . $dateHired . '</p>
                    <button type="button" class="btn rounded-pill edit-button" data-bs-toggle="modal" data-bs-target="#employeeModal" data-id="' . $id . '" data-name="' . $name . '" data-contact="' . $contact . '" data-date-hired="' . $dateHired . '"><i class="fa-solid fa-user-pen" style="color: #ec5b33;"></i></button>
                  </div>
                </div>
                
              ';
            }
          } else {
            // Handle case when there are no rows in the table
            echo '<p>No data available.</p>';
          }0

          // Close the database connection
          mysqli_close($connection);
          ?>
        </div>

      </div>




  

  <?php
  // Check if the update button is clicked
  if (isset($_POST['updateEmployee'])) {
    // Get the employee ID from the form input
    $id = $_POST['employeeId'];

    // Get the updated values from the form inputs
    $name = $_POST['nameInput'];
    $contact = $_POST['contactInput'];
    $dateHired = $_POST['dateHiredInput'];

    // Assuming you have established a database connection

    // Update the employee record in the database
    $query = "UPDATE employees SET name='$name', contact='$contact', date_hired='$dateHired' WHERE id=$id";
    $result = mysqli_query($connection, $query);

    if ($result) {
      // Update successful
      echo '<script>alert("Employee record updated successfully.");</script>';
    } else {
      // Update failed
      echo '<script>alert("Error updating employee record: ' . mysqli_error($connection) . '");</script>';
    }

    // Close the database connection
    mysqli_close($connection);
  }
  ?>