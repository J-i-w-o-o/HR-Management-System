<?php
// Assuming you have already established    
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hrms';

// Create a connection
$connection = new mysqli($host, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}
// Retrieve form data
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

// File upload handling (optional)
$targetDirectory = "C:/xampp/htdocs/HR-Management-System/uploads/";
$targetFile = $targetDirectory . basename($_FILES['fileToUpload']['name']);
$uploadSuccess = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile);


// Prepare and execute the database query
$query = "INSERT INTO job_applications (firstname, address, mobile, email, file_path) VALUES (?, ?, ?, ?, ?)";
$stmt = $connection->prepare($query);

if (!$stmt) {
    die('Error: ' . $connection->error);
}

$stmt->bind_param("sssss", $firstname, $address, $mobile, $email, $targetFile);
$result = $stmt->execute();

if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
?>
