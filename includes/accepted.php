<?php
if (isset($_GET['name'])) {
  $name = $_GET['name'];
  echo "<h2>Accepted Applicant: $name</h2>";
} else {
  echo "<h2>No name provided.</h2>";
}
?>
