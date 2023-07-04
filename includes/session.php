<?php

session_start(); // Start the session

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: ../admin/login.php"); // Redirect to the login page
    exit();
}

// Logout logic
if (isset($_GET['logout'])) {
    // Clear the session data
    session_destroy();
    header("Location: ../admin/login.php"); // Redirect to the index page after logout
    exit();
}
$page = isset($_GET['page']) ? $_GET['page'] : 'default';
?>