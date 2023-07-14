<?php
require_once '../includes/db.php';

$requiredFields = ['position', 'firstname', 'address', 'mobile', 'email'];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $response = ['status' => 'error', 'message' => 'Please fill in all the required fields.'];
        echo json_encode($response);
        exit();
    }
}

$query = "SELECT COUNT(*) FROM job_applications WHERE email = ? OR mobile = ?";
$stmt = $connection->prepare($query);

if (!$stmt) {
    $response = ['status' => 'error', 'message' => $connection->error];
    echo json_encode($response);
    exit();
}

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$stmt->bind_param("ss", $email, $mobile);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();

if ($count > 0) {
    $response = ['status' => 'error', 'message' => 'Email or mobile number already exists.'];
    echo json_encode($response);
    exit();
}

$stmt->close();

$query = "INSERT INTO job_applications (firstname, address, mobile, email, file_path, position) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $connection->prepare($query);

if (!$stmt) {
    $response = ['status' => 'error', 'message' => $connection->error];
    echo json_encode($response);
    exit();
}

$targetDirectory = "C:/xampp/htdocs/HR-Management-System/uploads/";
$targetFile = $targetDirectory . basename($_FILES['fileToUpload']['name']);
$allowedExtensions = ['pdf'];
$uploadedExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

if (!in_array($uploadedExtension, $allowedExtensions) || !move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
    $response = ['status' => 'error', 'message' => 'Error uploading the file.'];
    echo json_encode($response);
    exit();
}

$stmt->bind_param("ssssss", $_POST['firstname'], $_POST['address'], $_POST['mobile'], $_POST['email'], $targetFile, $_POST['position']);
$result = $stmt->execute();

if ($result) {
    $response = ['status' => 'success', 'message' => 'Data inserted successfully.'];
    echo json_encode($response);
} else {
    $response = ['status' => 'error', 'message' => $stmt->error];
    echo json_encode($response);
}

$stmt->close();
$connection->close();
