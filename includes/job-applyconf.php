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
// Form validation
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

if (empty($firstname) || empty($address) || empty($mobile) || empty($email)) {
    die("Please fill in all the required fields.");
}

// Prepare and execute the database query
$query = "SELECT * FROM job_applications WHERE email = ?";
$stmt = $connection->prepare($query);

if (!$stmt) {
    die('Error: ' . $connection->error);
}

$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $alertMessage = urlencode('Form Already Exist!');
    $redirectUrl = $_SERVER['HTTP_REFERER'] . '?alert=' . $alertMessage;

    // Redirect back to the previous page with the alert message
    header("Location: $redirectUrl");
    exit();
}

$stmt->close();

$query = "INSERT INTO job_applications (firstname, address, mobile, email, file_path) VALUES (?, ?, ?, ?, ?)";
$stmt = $connection->prepare($query);

if (!$stmt) {
    die('Error: ' . $connection->error);
}

// File upload handling (optional)
$targetDirectory = "C:/xampp/htdocs/PHP-Structure/uploads/";
$targetFile = $targetDirectory . basename($_FILES['fileToUpload']['name']);
$uploadSuccess = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile);
$stmt->bind_param("sssss", $firstname, $address, $mobile, $email, $targetFile);
$result = $stmt->execute();

if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
