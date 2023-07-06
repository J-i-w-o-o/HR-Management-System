<?php
// Retrieve the approved name from the URL query parameter
$approvedName = $_GET['name'];

// Apply styles to the echoed text
echo "<h1>Applicant Name: " . $approvedName . "</h1>";

?>
