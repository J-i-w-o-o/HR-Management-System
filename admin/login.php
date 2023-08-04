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

            <!-- Sign-in form -->
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
                        <a href="#forgotPasswordModal" class="text-muted" data-bs-toggle="modal">Forgot password?</a>
                    </div>
                </div>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn text-light btn-block" style="background-color: #ff5100;">Sign in</button>
            </form>

            <!-- Forgot password modal -->
            <div id="forgotPasswordModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="form-group">
                                    <label for="recoveryCode">Recovery Code</label>
                                    <input type="text" name="recoveryCode" class="form-control" placeholder="Enter recovery code" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './templates/footer.php';
?>