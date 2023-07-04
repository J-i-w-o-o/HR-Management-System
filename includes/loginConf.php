<?php
// Initialize the alert message variable
$alertMessage = "";

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // Redirect to the dashboard page
    header("Location: index.php?dashboard");
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the SQL statement to fetch user data
    $query = "SELECT * FROM users WHERE username = ?";
    $statement = $connection->prepare($query);
    $statement->bind_param("s", $username);
    $statement->execute();
    $result = $statement->get_result();

    // Check if the user exists
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // Verify the password
        if (password_verify($password, $storedPassword)) {
            // Password is correct, perform login logic
            $_SESSION['username'] = $username; // Store the username in the session
            header("Location: index.php?dashboard"); // Redirect to the dashboard page
            exit();
        } else {
            // Password is incorrect
            $alertMessage = '<div class="alert alert-danger" role="alert">Incorrect password!</div>';
        }
    } else {
        // User does not exist
        $alertMessage = '<div class="alert alert-danger" role="alert">User not found!</div>';
    }

    // Close the statement
    $statement->close();
}
?>