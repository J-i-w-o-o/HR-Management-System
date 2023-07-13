<title>Employee</title>
<link rel="stylesheet" href="../assets/css/employee.css">
<div id="main">

    <!-- title page and search bar  -->
    <div class="d-flex justify-content-between align-items-center mx-2">
      <div>
        <p class="text-center lead ms-3 mt-3">
       <h4 class="mx-2"><span id="jobCount"></span> Employees</p>
      </div>
      <form class="d-flex forms my-3">
        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addJobModal"><i class="fa-solid fa-user-plus"></i></button>
        <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for Employee">
      </form>
    </div>

    <!-- main content -->
    <div class="text-center">
    </div>
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
              $dateHired = $row['date_hired'];

              // Generate the HTML for each card dynamically
              echo '
                <div class="card mx-2">
                  <div class="card-body">
                    <img src="../assets/images/sample.jpg" class="mb-3" width="150" height="150">
                    <h5 class="card-title text-muted">'.$department.'</h5>
                    <p class="card-text" data-id="' . $id . '"></p>
                    <p class="card-text">Name: ' . $name . '</p>
                    <p class="card-text">Contact: ' . $contact . '</p>
                    <p class="card-text">Date Hired: ' . $dateHired . '</p>
                    <button type="button" class="btn rounded-pill edit-button" data-bs-toggle="modal" data-bs-target="#jobModal" data-id="' . $id . '" data-name="' . $name . '" data-contact="' . $contact . '" data-date-hired="' . $dateHired . '"><i class="fa-solid fa-user-pen" style="color: #ec5b33;"></i></button>
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
      <!-- modal for content start here -->
      <div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content custom-scrollbar">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="jobLabel"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <h2>Edit Profile</h2>
              <p id="overview"></p>
              <form id="updateForm" method="POST" action="">
                <div class="row">
                  <div class="col-6">
                    <p class="card-text">Name</p>
                    <input type="text" id="nameInput" name="nameInput" class="form-control" value="">
                    <p class="card-text">Contact</p>
                    <input type="text" id="contactInput" name="contactInput" class="form-control" value="">
                    <p class="card-text">Date Hired</p>
                    <input type="text" id="dateHiredInput" name="dateHiredInput" class="form-control" value="">
                  </div>
                </div>
                <input type="hidden" id="employeeId" name="employeeId" value="">
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" id="btnremove" class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
              <button type="submit" id="btnupdateModal" class="btn btn-success" name="updateEmployee"><i class="fa-solid fa-pen"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- modal for add employee -->
      <div class="modal fade" id="addJobModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content custom-scrollbar">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="jobLabel"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <h2>Add Employee Profile</h2>
              <p id="overview"></p>
              <div class="row">
                <div class="col-6">
                  <p class="card-text">Name</p>
                  <p class="card-text">Contact</p>
                  <p class="card-text">Date Hired</p>
                  <p class="card-text">Resume</p>
                  <p class="card-text">Update Profile Picture</p>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" id="btnremove" class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
              <button type="submit" id="btnupdateAdd" class="btn btn-success" form="applicationform"><i class="fa-solid fa-pen"></i></button>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>

  <script>
  // Update the job count
var jobCount = document.getElementById('jobCount');
jobCount.textContent = '<?php echo $employeeCount; ?>';

    // Get the modal element
    var jobModal = document.getElementById('jobModal');

    // Attach a click event listener to each edit button
    var editButtons = document.querySelectorAll('.edit-button');
    editButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        var id = button.getAttribute('data-id');
        var name = button.getAttribute('data-name');
        var contact = button.getAttribute('data-contact');
        var dateHired = button.getAttribute('data-date-hired');

        // Update the modal content
        var jobLabel = jobModal.querySelector('#jobLabel');
        jobLabel.textContent = 'Edit Profile';

        var overview = jobModal.querySelector('#overview');
        overview.textContent = '';

        var modalBody = jobModal.querySelector('.modal-body');
        var rows = modalBody.querySelectorAll('.col-6 p.card-text');
        rows[0].textContent = 'Name: ' + name;
        rows[1].textContent = 'Contact: ' + contact;
        rows[2].textContent = 'Date Hired: ' + dateHired;

        // Set the form values
        var nameInput = document.getElementById('nameInput');
        var contactInput = document.getElementById('contactInput');
        var dateHiredInput = document.getElementById('dateHiredInput');
        var employeeIdInput = document.getElementById('employeeId');

        nameInput.value = name;
        contactInput.value = contact;
        dateHiredInput.value = dateHired;
        employeeIdInput.value = id;
      });
    });

    // Submit the update form in the jobModal
    var btnUpdateModal = document.getElementById('btnupdateModal');
    btnUpdateModal.addEventListener('click', function() {
      document.getElementById('updateForm').submit();
    });
  </script>

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