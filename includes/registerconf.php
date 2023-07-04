<?php
// Function to generate a random recovery key
function generateRecoveryKey() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $recoveryKey = '';
    $length = 8; // You can adjust the length of the recovery key as per your requirements

    for ($i = 0; $i < $length; $i++) {
        $index = random_int(0, strlen($characters) - 1);
        $recoveryKey .= $characters[$index];
    }

    return $recoveryKey;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $recoveryKey = generateRecoveryKey();

    // Hash the password using bcrypt
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    $query = "INSERT INTO users (username, password, recoveryKey) VALUES (?, ?, ?)";
    $statement = $connection->prepare($query);
    $statement->bind_param("sss", $username, $hashedPassword, $recoveryKey);
    
    if ($statement->execute()) {
        echo "Registration successful!";
    } else {
        echo "Registration failed!";
    }

    // Close the statement
    $statement->close();
}

// Close the database connection
$connection->close();

?>