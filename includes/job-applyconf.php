<?php
include '../includes/db.php';

$position = $_POST['position'];
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

if (empty($firstname) || empty($address) || empty($mobile) || empty($email) || empty($position)) {
    $response = array(
        'status' => 'error',
        'message' => 'Please fill in all the required fields.'
    );
    echo json_encode($response);
    exit();
}

$query = "SELECT * FROM job_applications WHERE email = ? AND mobile = ?";
$stmt = $connection->prepare($query);

if (!$stmt) {
    $response = array(
        'status' => 'error',
        'message' => $connection->error
    );
    echo json_encode($response);
    exit();
}

$stmt->bind_param("ss", $email, $mobile);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $response = array(
        'status' => 'error',
        'message' => 'Email Already Exists'
    );
    echo json_encode($response);
    exit();
}

$stmt->close();

$query = "INSERT INTO job_applications (firstname, address, mobile, email, file_path, position) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $connection->prepare($query);

if (!$stmt) {
    $response = array(
        'status' => 'error',
        'message' => $connection->error
    );
    echo json_encode($response);
    exit();
}

$targetDirectory = "C:/xampp/htdocs/HR-Management-System/uploads/";
$targetFile = $targetDirectory . basename($_FILES['fileToUpload']['name']);
$uploadSuccess = false;
$allowedExtensions = array('pdf');
$uploadedExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
if (in_array($uploadedExtension, $allowedExtensions)) {
    $uploadSuccess = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile);
}

if ($uploadSuccess) {
    $stmt->bind_param("ssssss", $firstname, $address, $mobile, $email, $targetFile, $position);
    $result = $stmt->execute();

    if ($result) {
        $response = array(
            'status' => 'success',
            'message' => 'Data Inserted Successfully'
        );
        echo json_encode($response);
        exit();
    } else {
        $response = array(
            'status' => 'error',
            'message' => $stmt->error
        );
        echo json_encode($response);
        exit();
    }
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Upload Error'
    );
    echo json_encode($response);
    exit();
}

$stmt->close();
$connection->close();
?>
