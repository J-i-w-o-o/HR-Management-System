<?php
require_once 'replyMail.php';
require_once '../includes/db.php';

function respondWithError($message) {
    $response = ['status' => 'error', 'message' => $message];
    echo json_encode($response);
    exit();
}

function respondWithSuccess($message) {
    $response = ['status' => 'success', 'message' => $message];
    echo json_encode($response);
    exit();
}

$requiredFields = ['position', 'firstname', 'address', 'mobile', 'email'];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        respondWithError('Please fill in all the required fields.');
    }
}

// Sanitize and validate input
$firstname = htmlspecialchars($_POST['firstname']);
$address = htmlspecialchars($_POST['address']);
$mobile = htmlspecialchars($_POST['mobile']);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

if (!$email) {
    respondWithError('Invalid email address.');
}

$query = "SELECT COUNT(*) FROM job_applications WHERE email = ? OR mobile = ?";
$stmt = $connection->prepare($query);

if (!$stmt) {
    respondWithError($connection->error);
}

$stmt->bind_param("ss", $email, $mobile);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();

if ($count > 0) {
    respondWithError('Email or mobile number already exists.');
}

$stmt->close();

// File Upload Security
$targetDirectory = "../uploads/";
$uploadedFile = $_FILES['fileToUpload']['tmp_name'];
$uploadedFileName = basename($_FILES['fileToUpload']['name']);
$targetFile = $targetDirectory . uniqid() . '_' . $uploadedFileName; // Add a unique identifier to the filename
$allowedExtensions = ['pdf', 'docx'];
$uploadedExtension = strtolower(pathinfo($uploadedFileName, PATHINFO_EXTENSION));
$uploadedFileSize = $_FILES['fileToUpload']['size'];

if (!in_array($uploadedExtension, $allowedExtensions) || $uploadedFileSize > 5242880) { // Limit file size to 5MB
    respondWithError('Error uploading the file. Only PDF and DOCX files up to 5MB are allowed.');
}

if (!move_uploaded_file($uploadedFile, $targetFile)) {
    respondWithError('Error uploading the file.');
}

// Insert data into the database
$query = "INSERT INTO job_applications (firstname, address, mobile, email, file_path, position) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $connection->prepare($query);

if (!$stmt) {
    respondWithError($connection->error);
}

$stmt->bind_param("ssssss", $firstname, $address, $mobile, $email, $targetFile, $_POST['position']);
$result = $stmt->execute();

if ($result) {
    sendAutoResponseEmail();
    respondWithSuccess('Data inserted successfully.');
} else {
    respondWithError($stmt->error);
}

$stmt->close();
$connection->close();
?>
