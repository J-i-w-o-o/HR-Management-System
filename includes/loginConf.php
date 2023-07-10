    <?php
    session_start();
    // Initialize the alert message variable
    $alertMessage = "";
    include '../includes/db.php';
    // Check if the user is already logged in
    if (isset($_SESSION['username'])) {
        // Redirect to the dashboard page
        header("Location: index.php?dashboard");
        exit();
    }

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if recovery code is submitted
        if (isset($_POST['recoveryCode'])) {
            $recoveryCode = $_POST['recoveryCode'];

            // Prepare and execute the SQL statement to fetch user data
            $query = "SELECT * FROM users WHERE recoveryKey = ?";
            $statement = $connection->prepare($query);
            $statement->bind_param("s", $recoveryCode);
            $statement->execute();
            $result = $statement->get_result();

            // Check if the recovery code matches
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $userId = $row['id'];

                // Display the form to set a new password
                echo '
                    <div class="alert alert-info" role="alert">Please set a new password:</div>
                    <form action="' . $_SERVER['PHP_SELF'] . '" method="POST">
                        <input type="hidden" name="userId" value="' . $userId . '">
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" name="newPassword" class="form-control" placeholder="Enter new password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm new password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="setNewPassword" class="btn btn-primary">Set New Password</button>
                        </div>
                    </form>
                ';
            } else {
                // Recovery code does not match
                $alertMessage = '<div class="alert alert-danger" role="alert">Invalid recovery code!</div>';
            }

            // Close the statement
            $statement->close();
        } elseif (isset($_POST['setNewPassword'])) {
            $userId = $_POST['userId'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];

            // Check if the new password and confirm password match
            if ($newPassword === $confirmPassword) {
                // Encrypt the new password
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                // Update the user's password in the database
                $updateQuery = "UPDATE users SET password = ? WHERE id = ?";
                $updateStatement = $connection->prepare($updateQuery);
                $updateStatement->bind_param("si", $hashedPassword, $userId);
                $updateStatement->execute();

                // Display success message
                $alertMessage = '<div class="alert alert-success" role="alert">Password reset successfully!</div>';
            } else {
                // Passwords do not match
                $alertMessage = '<div class="alert alert-danger" role="alert">Passwords do not match!</div>';
            }
        } else {
            // Login form submitted
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
    }
    ?>
