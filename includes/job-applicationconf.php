<?php
include '../includes/db.php';
$status = 'pending'; // Default status is 'pending'
if (isset($_GET['job-application'])) {
  // If the URL parameter is present, set the status accordingly
  $status = 'pending';
} elseif (isset($_GET['job-application-accepted'])) {
  $status = 'accepted';
} elseif (isset($_GET['job-application-declined'])) {
  $status = 'declined';
}

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
  $id = $_POST['delete'];

  // Delete the corresponding row from the "job_application" table
  $deleteSql = "UPDATE `job_applications` SET `status`='declined' WHERE id = $id";
  mysqli_query($connection, $deleteSql);
}

// Check if the approve button is clicked
if (isset($_POST['approve'])) {
  $id = $_POST['approve'];

  $approveSql = "UPDATE `job_applications` SET `status`='accepted' WHERE id = $id";
  mysqli_query($connection, $approveSql);


}

// Update the SQL query to use the $status variable
$sql = "SELECT * FROM job_applications WHERE status = '$status'";
$result = mysqli_query($connection, $sql);

// Display the data in table rows
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['position'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['mobile'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    $file_path = $row['file_path'];
    $modified_file_path = str_replace('C:/xampp/htdocs', '', $file_path);
    echo '<td>
    <a href="' . $modified_file_path . '" target="_blank">
    ' . basename($row['file_path']) . '
    </a>
    </td>';    
    echo "<td class='text-center'>
            <form method='POST'>
              <button type='submit' name='approve' value='" . $row['id'] . "' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button>
              <button type='submit' name='delete' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
            </form>
          </td>";

          
          
    echo "<td>" . $row['status'] . "</td>";

    echo "</tr>";
  }
} else {
  echo "<tr class='text-center'><td colspan='8'>No job applications found.</td></tr>";
}

// Close the database connection
mysqli_close($connection);
?>
