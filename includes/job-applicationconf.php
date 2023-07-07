<?php
include '../includes/db.php';

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
  $id = $_POST['delete'];

  // Delete the corresponding row from the "job_application" table
  $deleteSql = "DELETE FROM job_applications WHERE id = $id";
  mysqli_query($connection, $deleteSql);
}

// Check if the approve button is clicked
if (isset($_POST['approve'])) {
  $id = $_POST['approve'];

  // Perform the necessary actions to approve the job application
  // For example, you can update a column in the "job_application" table to mark it as approved

  // You can add your logic here to perform the approval action

  // Retrieve the approved name from the database
  $selectSql = "SELECT firstname FROM job_applications WHERE id = $id";
  $result = mysqli_query($connection, $selectSql);
  $row = mysqli_fetch_assoc($result);
  $approvedName = $row['firstname'];

  // Redirect to another page after approval
  header("Location: ../includes/accepted.php?name=" . urlencode($approvedName));
  exit();
}

// Fetch data from the "job_application" table
$sql = "SELECT * FROM job_applications";
$result = mysqli_query($connection, $sql);

// Display the data in table rows
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['mobile'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    $file_path = $row['file_path'];
    $modified_file_path = str_replace('C:/xampp/htdocs', '', $file_path);
    echo '<td>
    <a href="' .$modified_file_path. '" download="' . basename($row['file_path']) . '">
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
  echo "<tr><td colspan='7'>No job applications found.</td></tr>";
}

// Close the database connection
mysqli_close($connection);
