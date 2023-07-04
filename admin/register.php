<?php
include '../includes/db.php';
include '../includes/registerconf.php';
include './templates/header.php';
?>
    <h2>Registration Form</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>

