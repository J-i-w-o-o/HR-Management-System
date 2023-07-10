<script>
  // Function to trigger the Swal dialog box
  function fireSwal1() {
    Swal.fire({
      position: 'top-right',
      icon: 'success',
      title: 'Approved Successfully',
      showConfirmButton: false,
      timer: 1500
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'index.php?job-application-accepted';
      }
    });
  }
</script>
<?php
include '../includes/db.php';
$status = 'pending'; // Default status is 'pending'
if (isset($_GET['job-application'])) {
  // If the URL parameter is present, set the status accordingly
  $status = 'pending';
} elseif (isset($_GET['job-application-declined'])) {
  $status = 'declined';
} elseif (isset($_GET['job-application-interview'])) {
  $status = 'for-interview';
}

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
  $id = $_POST['delete'];

  // Delete the corresponding row from the "job_application" table
  $deleteSql = "UPDATE `job_applications` SET `status`='declined' WHERE id = $id";
  mysqli_query($connection, $deleteSql);
}

// Check if the interview button is clicked
if (isset($_POST['interview'])) {
  $id = $_POST['interview'];
  $schedule = $_POST['schedule'];

  $approveSql = "UPDATE `job_applications` SET `status`='for-interview', `schedule`='$schedule' WHERE id = $id";
  mysqli_query($connection, $approveSql);
}

if (isset($_POST['reassess'])) {
  $id = $_POST['reassess'];

  $approveSql = "UPDATE `job_applications` SET `status`='pending' WHERE id = $id";
  mysqli_query($connection, $approveSql);
}

// Update the SQL query to use the $status variable
$sql = "SELECT * FROM job_applications WHERE status = '$status'";
$result = mysqli_query($connection, $sql);

// Display the data in table rows
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    switch ($row['status']) {
      case 'pending':
        echo "<tr>";
        echo "<td style='padding-top: 10px'>" . $row['position'] . "</td>";
        echo "<td style='padding-top: 10px'>" . $row['firstname'] . "</td>";
        echo "<td style='padding-top: 10px'>" . $row['address'] . "</td>";
        echo "<td style='padding-top: 10px'>" . $row['mobile'] . "</td>";
        echo "<td style='padding-top: 10px'>" . $row['email'] . "</td>";
        $file_path = $row['file_path'];
        $modified_file_path = str_replace('C:/xampp/htdocs', '', $file_path);
        echo '<td style="padding-top: 10px;">
          <a href="' . $modified_file_path . '" target="_blank">
          ' . basename($row['file_path']) . '
          </a>
        </td>';
        echo "<td class='text-center'>
          <form method='POST'>
            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#scheduleModal" . $row['id'] . "'>Set Schedule</button>
            <button type='submit' name='delete' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
          </form>
        </td>";
        break;
      case 'declined':
       
    echo "<td class='text-center'>
    <form method='POST'>
    
      <button type='submit' title='Approved Application' name='approve' value='" . $row['id'] . "' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button>
      <button type='submit' title='Declined Application' name='archive' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
    </form>
  </td>";
        break;
      case 'for-interview':
       
    echo "<td class='text-center'>
    <form method='POST'>
    
      <button type='submit' data-toggle='modal' data-target='#hiredModal' title='Approved Application' name='hired' value='" . $row['id'] . "' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button>
      <button type='submit' title='Declined Application' name='declined' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
    </form>
  </td>";
        break;
    }
  }
} else {
  echo "<tr class='text-center'><td colspan='8'>No job applications found.</td></tr>";
}
$result = mysqli_query($connection, $sql); // Get the query result again for creating the modals
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="modal fade" id="scheduleModal' . $row['id'] . '" tabindex="-1" aria-labelledby="scheduleModalLabel' . $row['id'] . '" aria-hidden="true">';
    echo '  <div class="modal-dialog">';
    echo '    <div class="modal-content">';
    echo '      <div class="modal-header">';
    echo '        <h5 class="modal-title" id="scheduleModalLabel' . $row['id'] . '">Set Schedule</h5>';
    echo '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    echo '      </div>';
    echo '      <div class="modal-body">';
    echo '        <form method="POST">';
    echo '          <div class="mb-3">';
    echo '            <label for="scheduleInput' . $row['id'] . '" class="form-label">Schedule</label>';
    echo '            <input type="datetime-local" class="form-control" id="scheduleInput' . $row['id'] . '" name="schedule" required>';
    echo '          </div>';
    echo '          <div class="text-center">'; // Add a wrapper div with the "text-center" class
    echo '            <button type="submit" title="Approved Application" name="interview" value="' . $row['id'] . '" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>';
    echo '          </div>'; // Close the wrapper div
    echo '        </form>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
    
  }
}

// Close the database connection
mysqli_close($connection);


  
  
 