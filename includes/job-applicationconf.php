
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

if (isset($_POST['hired'])) {
  $id = $_POST['hired'];

  $jobApplicationSql = "SELECT `position`, `mobile`, `firstname`, NOW() AS `timenow` FROM `job_applications` WHERE `id` = $id";
  $result = mysqli_query($connection, $jobApplicationSql);
  $row = mysqli_fetch_assoc($result);

  $position = $row['position'];
  $mobile = $row['mobile'];
  $firstname = $row['firstname'];
  $timenow = $row['timenow'];

  $hiredSql = "INSERT INTO `employees`(`name`, `department`, `contact`, `date_hired`) VALUES ('$firstname', '$position', '$mobile', '$timenow')";
  mysqli_query($connection, $hiredSql);

  // Check if the record was successfully inserted into the `employees` table
  if (mysqli_affected_rows($connection) > 0) {
    // Delete the row from `job_applications` where id matches and status is "for-interview"
    $deleteSql = "DELETE FROM `job_applications` WHERE `id` = $id AND `status` = 'for-interview'";
    mysqli_query($connection, $deleteSql);
  }
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
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['position'] . "</td>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['firstname'] . "</td>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['address'] . "</td>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['mobile'] . "</td>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['email'] . "</td>";
        $modified_file_path = getModifiedFilePath($row['file_path']);
        echo '<td class="shorten-text text-center " style="padding-top: 10px;">
            <a href="' . $modified_file_path . '" target="_blank">
            ' . basename($row['file_path']) . '
            </a>
        </td>';
        echo "<td class='text-center'>
          <form method='POST'>
            <button type='button'  class='btn btn-warning  ' data-bs-toggle='modal' data-bs-target='#scheduleModal" . $row['id'] . "'><i class='fas fa-clock' aria-hidden='true'></i></button>
            <button type='submit'  name='delete' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
          </form>
        </td>";
        break;
      case 'declined':
        echo "<tr>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['position'] . "</td>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['firstname'] . "</td>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['address'] . "</td>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['mobile'] . "</td>";
        echo "<td class='text-center' style='padding-top: 10px'>" . $row['email'] . "</td>";
        $modified_file_path = getModifiedFilePath($row['file_path']);
        echo '<td class="shorten-text text-center" style="padding-top: 10px;">
            <a href="' . $modified_file_path . '" target="_blank">
            ' . basename($row['file_path']) . '
            </a>
        </td>';
        echo "<td class='text-center'>
    <form method='POST'>
    
      <button type='submit' title='Approved Application'  name='reassess' value='" . $row['id'] . "' class='btn btn-success'><i class='fas fa-redo' aria-hidden='true'></i></button>
      <button type='submit' title='Declined Application' name='trashbin' value='" . $row['id'] . "' class='btn btn-danger'><i class='fas fa-trash' aria-hidden='true'></i></button>
    </form>
  </td>";
        break;
        case 'for-interview':
          echo "<tr>";
          echo "<td class='text-center' style='padding-top: 10px '>" . $row['position'] . "</td>";
          echo "<td class='text-center' style='padding-top: 10px'>" . $row['firstname'] . "</td>";
      
          // Convert schedule to the desired format
          $formattedDate = convertDateTimeFormat($row['schedule']);
          echo "<td class='text-center' style='padding-top: 10px'>" . $formattedDate . "</td>";
      
          echo "<td class='text-center' style='padding-top: 10px'>" . $row['mobile'] . "</td>";
          echo "<td class='text-center' style='padding-top: 10px'>" . $row['email'] . "</td>";
      
          $modified_file_path = getModifiedFilePath($row['file_path']);
          echo '<td  class="shorten-text text-center" style="padding-top: 10px;">
              <a href="' . $modified_file_path . '" target="_blank">
              ' . basename($row['file_path']) . '
              </a>
          </td>';
      
          echo "<td class='text-center'>
              <form method='POST'>
              <button type='submit'  name='hired' value='" . $row['id'] . "' class='btn btn-success'><i class='fa-regular fa-thumbs-up' aria-hidden='true'></i></button>
              <button type='submit'  name='delete' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa-regular fa-thumbs-down' aria-hidden='true'></i></button>
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
    echo '            <button type="submit" title="Approved Application" name="interview" value="' . $row['id'] . '" class="btn btn-primary">Set Schedule</button>';
    echo '          </div>'; // Close the wrapper div
    echo '        </form>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
  }
}
function getModifiedFilePath($file_path) {
  return str_replace('C:/xampp/htdocs', '', $file_path);
}

function convertDateTimeFormat($datetime) {
  $scheduleDateTime = new DateTime($datetime);
  return $scheduleDateTime->format('F j, Y | h:i A');
}
//asdsada
// Close the database connection
mysqli_close($connection);

if (isset($_POST['delete_all'])) {
  // Add code here to delete all items from your database or any other storage mechanism
  // ...

  // Redirect or refresh the page to show an updated table
  header('Location: job-application.php');
  exit();
}