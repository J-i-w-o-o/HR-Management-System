<?php
include '../includes/db.php';
// Form validation
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

if (empty($firstname) || empty($address) || empty($mobile) || empty($email)) {
    die("Please fill in all the required fields.");
}

// Prepare and execute the database query
$query = "SELECT * FROM job_applications WHERE email = ? AND mobile = ?";
$stmt = $connection->prepare($query);

if (!$stmt) {
    die('Error: ' . $connection->error);
}

$stmt->bind_param("ss", $email, $mobile);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo '<script>alert(" Email already exists.");</script>';
    echo '<script>window.location.href = "../careers.php";</script>';
    exit();
}

$stmt->close();

$query = "INSERT INTO job_applications (firstname, address, mobile, email, file_path) VALUES (?, ?, ?, ?, ?)";
$stmt = $connection->prepare($query);

if (!$stmt) {
    die('Error: ' . $connection->error);
}

// File upload handling (optional)
$targetDirectory = "C:/xampp/htdocs/HR-Management-System/uploads/";
$targetFile = $targetDirectory . basename($_FILES['fileToUpload']['name']);
$uploadSuccess = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile);
$stmt->bind_param("sssss", $firstname, $address, $mobile, $email, $targetFile);
$result = $stmt->execute();

if ($result) {
    echo '<script>alert("Data inserted successfully");</script>';
    echo '<script>window.location.href = "../careers.php";</script>';
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
