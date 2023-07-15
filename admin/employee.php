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
      <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addEmployee"><i class="fa-solid fa-user-plus"></i></button>
      <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for Employee">
    </form>
  </div>

  <!-- main content -->

  <?php include '../includes/employeeconf.php' ?>


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
  $connection = mysqli_connect("hostname", "username", "password", "database_name");

  // Check if the database connection is successful
  if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
  }

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

<?php include '../admin/modals/employee-modal.php' ?>

</div>