<?php
include '../includes/db.php';
include '../includes/loginConf.php';
include './templates/header.php';
?>
<!-- HTML form -->
<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card border-0 shadow p-2 mb-4" style="max-width: 400px;">
        <div class="card-body">
            <?php echo $alertMessage; ?>
            <div class="text-center mb-2">
                <img src="../assets/images/TMC_LOGO.png" alt="Logo" height="80" width="200">
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <!-- Username input -->
                <div class="form-group my-2 mt-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <!-- Password input -->
                <div class="form-group mb-2">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group mb-2">
                    <div class="form-group col text-center">
                        <a href="#!" class="text-muted">Forgot password?</a>
                    </div>
                </div>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn text-light btn-block" style="background-color: #ff5100;">Sign in</button>
            </form>
        </div>
    </div>
</div>
<?php
include './templates/footer.php';
?>