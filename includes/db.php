<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "hrms";

// Establish a connection to the database
$connection = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
?>