<?php
// Check if the required parameters are provided
if (isset($_GET['position']) && isset($_GET['firstname']) && isset($_GET['address']) && isset($_GET['mobile']) && isset($_GET['email']) && isset($_GET['resume']) && isset($_GET['status'])) {
  // Retrieve the approved job application details from the URL parameters
  $position = $_GET['position'];
  $firstname = $_GET['firstname'];
  $address = $_GET['address'];
  $mobile = $_GET['mobile'];
  $email = $_GET['email'];
  $resume = $_GET['resume'];
  $status = $_GET['status'];

  // Display the approved job application details
  echo "<h2>Approved Job Application Details</h2>";
  echo "<p>Position: " . $position . "</p>";
  echo "<p>First Name: " . $firstname . "</p>";
  echo "<p>Address: " . $address . "</p>";
  echo "<p>Mobile: " . $mobile . "</p>";
  echo "<p>Email: " . $email . "</p>";
  echo '<p>Resume: <a href="' . $resume . '" download>' . basename($resume) . '</a></p>';
  echo "<p>Status: " . $status . "</p>";
} else {
  echo "<p>Invalid parameters provided.</p>";
}
?>
