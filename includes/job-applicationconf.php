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

// Check if the approve button is clicked
if (isset($_POST['approve'])) {
  $id = $_POST['approve'];

  $approveSql = "UPDATE `job_applications` SET `status`='accepted' WHERE id = $id";
  mysqli_query($connection, $approveSql);
}

if (isset($_POST['interview'])) {
  $id = $_POST['interview'];

  $approveSql = "UPDATE `job_applications` SET `status`='for-interview' WHERE id = $id";
  mysqli_query($connection, $approveSql);
}

// Update the SQL query to use the $status variable
$sql = "SELECT * FROM job_applications WHERE status = '$status'";
$result = mysqli_query($connection, $sql);

// Display the data in table rows
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td style='padding-top: 10px'>" . $row['position'] . "</td>";
    echo "<td style='padding-top: 10px'>" . $row['firstname'] . "</td>";
    echo "<td style='padding-top: 10px'
    >" . $row['address'] . "</td>";
    echo "<td style='padding-top: 10px'>" . $row['mobile'] . "</td>";
    echo "<td style='padding-top: 10px'>" . $row['email'] . "</td>";
    $file_path = $row['file_path'];
    $modified_file_path = str_replace('C:/xampp/htdocs', '', $file_path);
    echo '<td style="padding-top: 10px;">
    <a href="' . $modified_file_path . '" target="_blank">
    ' . basename($row['file_path']) . '
    </a>
    </td>';   

    switch ($row['status']) {
      case 'pending':
        
    echo "<td class='text-center'>
    <form method='POST'>
    
      <button type='submit' title='Approve Application' name='approve' value='" . $row['id'] . "' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button>
      <button type='submit' name='delete' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
    </form>
  </td>";
        break;
      case 'accepted':
       
    echo "<td class='text-center'>
    <form method='POST'>
    
      <button type='submit' name='interview' value='" . $row['id'] . "' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button>
      <button type='submit' name='delete' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
    </form>
  </td>";
        break;
      case 'declined':
       
    echo "<td class='text-center'>
    <form method='POST'>
    
      <button type='submit' name='approve' value='" . $row['id'] . "' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button>
      <button type='submit' name='archive' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
    </form>
  </td>";
        break;
      case 'for-interview':
       
    echo "<td class='text-center'>
    <form method='POST'>
    
      <button type='submit' name='hired' value='" . $row['id'] . "' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button>
      <button type='submit' name='declined' value='" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button>
    </form>
  </td>";
        break;
      }


  
    // Set color and background based on status
    $statusColor = '';
    $statusBackgroundColor = '';
    
    switch ($row['status']) {
      case 'pending':
        $statusColor = 'white'; // Change to the desired color for pending status
        $statusBackgroundColor = '#cb9c01'; // Change to the desired background color for pending status
        break;
      case 'accepted':
        $statusColor = 'white'; // Change to the desired color for accepted status
        $statusBackgroundColor = '#14A44D'; // Change to the desired background color for accepted status
        break;
      case 'declined':
        $statusColor = 'white'; // Change to the desired color for declined status
        $statusBackgroundColor = '#DC4C64'; // Change to the desired background color for declined status
        break;
      case 'for-interview':
        $statusColor = 'white'; // Default color if status doesn't match any of the cases
        $statusBackgroundColor = '#ec5b33'; // Default background color if status doesn't match any of the cases
        break;
      default:
        $statusColor = ''; // Default color if status doesn't match any of the cases
        $statusBackgroundColor = ''; // Default background color if status doesn't match any of the cases
        break;
    }

    echo "<td class='text-center text-uppercase'  style='color: $statusColor; background-color: $statusBackgroundColor; padding-top: 10px;'>" . $row['status'] . "</td>";

    echo "</tr>";
  }
} else {
  echo "<tr class='text-center'><td colspan='8'>No job applications found.</td></tr>";
}

// Close the database connection
mysqli_close($connection);
