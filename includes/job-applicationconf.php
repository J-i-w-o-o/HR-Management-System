<?php
include '../includes/db.php';

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
  $id = $_POST['delete'];

  // Delete the corresponding row from the "job_application" table
  $deleteSql = "DELETE FROM job_applications WHERE id = $id";
  mysqli_query($connection, $deleteSql);
}

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
    echo "<td>
    

            <form method='POST'>
            <button type='button' class='btn btn-success'>Accept</button><button type='submit' name='delete' value='" . $row['id'] . "' class='btn btn-danger ms-2'>Reject</button>
            </form>
          </td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='7'>No job applications found.</td></tr>";
}

// Close the database connection
mysqli_close($connection);
?>
