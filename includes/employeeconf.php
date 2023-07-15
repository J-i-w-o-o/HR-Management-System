<?php

// Function to establish database connection
function connectToDatabase($servername, $username, $password, $dbname) {
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    return $mysqli;
}

// Function to handle profile picture upload
function handleProfilePictureUpload($targetDirectory, $fileInputName, $employeeId, $mysqli) {
    $targetFile = $targetDirectory . basename($_FILES[$fileInputName]['name']);
    $allowedExtensions = ['png', 'jpg', 'jpeg'];
    $uploadedExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (in_array($uploadedExtension, $allowedExtensions)) {
        if (move_uploaded_file($_FILES[$fileInputName]['tmp_name'], $targetFile)) {
            $filePath = $targetFile;
            updateFilePath($employeeId, $filePath, $mysqli);
        } else {
  
        }
    } else {

    }
}

// Function to update the file path in the database
function updateFilePath($employeeId, $filePath, $mysqli) {
    $stmt = $mysqli->prepare("UPDATE employees SET file_path=? WHERE id=?");
    $stmt->bind_param("si", $filePath, $employeeId);
    $stmt->execute();
}

// Function to update an employee
function updateEmployee($employeeId, $name, $contact, $mysqli) {
    $stmt = $mysqli->prepare("UPDATE employees SET name=?, contact=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $contact, $employeeId);
    $stmt->execute();
}

// Function to add a new employee
function addEmployee($name, $contact, $dateHired, $position, $mysqli) {
    $stmt = $mysqli->prepare("INSERT INTO employees (name, contact, date_hired, department) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $contact, $dateHired, $position);
    $stmt->execute();

    $employeeId = $mysqli->insert_id;

    return $employeeId;
}

// Main code
if (isset($_POST['deleteEmployee']) && isset($_POST['employeeId'])) {
    $employeeId = $_POST['employeeId'];
    $mysqli = connectToDatabase("localhost", "root", "", "hrms");

    // Delete the employee from the database
    $stmt = $mysqli->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->bind_param("i", $employeeId);
    $stmt->execute();
    // Redirect to the previous page after deleting the employee
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

if (isset($_POST['updateEmployee'])) {
    $employeeId = $_POST['employeeId'];
    $name = $_POST['nameInput'];
    $contact = $_POST['contactInput'];
    $mysqli = connectToDatabase("localhost", "root", "", "hrms");

    updateEmployee($employeeId, $name, $contact, $mysqli);

    if (isset($_FILES['imageUpload'])) {
        handleProfilePictureUpload("C:/xampp/htdocs/HR-Management-System/uploads/", 'imageUpload', $employeeId, $mysqli);
    }
    header("Location: " . $_SERVER['HTTP_REFERER']); // Redirect to previous page
    exit;
}

if (isset($_POST['addEmployee'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $dateHired = $_POST['dateHired'];
    $position = $_POST['position'];
    $mysqli = connectToDatabase("localhost", "root", "", "hrms");

    $employeeId = addEmployee($name, $contact, $dateHired, $position, $mysqli);

    if (isset($_FILES['profilePicture'])) {
        handleProfilePictureUpload("C:/xampp/htdocs/HR-Management-System/uploads/", 'profilePicture', $employeeId, $mysqli);
    }
    header("Location: " . $_SERVER['HTTP_REFERER']); // Redirect to previous page
    exit;
}

?>
