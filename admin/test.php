<?php include '../includes/db.php';
date_default_timezone_set('Asia/Manila');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/node_modules/mdb-ui-kit/css/mdb.min.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/job-application.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/js/node_modules/sweetalert2/dist/sweetalert2.min.css">

    <title>TIGER'S MARK CORPORATION</title>
    <link rel="icon" href="../assets/images/TMC_LOGO.png">
</head>
<style>
    .shorten-text {
        max-width: 100px;
        /* Adjust the value according to your needs */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>
<header>


    <nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="dark">
        <div class="container-fluid ">
            <div id="mySidenav" class="sidenav shadow rounded ">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="border-bottom border-black border-2 mx-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-tachometer mx-2"> </i>Dashboard</a>
                <a class="border-bottom border-black border-2 mx-2" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="fa fa-list mx-2"> </i>Job Listing</a>
                <a class="border-bottom border-black border-2 mx-2" href="index.php?job-application" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-file mx-2"> </i>Job Application</a>
                <a class="border-bottom border-black border-2 mx-2" href="index.php?employee" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-users mx-2"> </i>Employees</a>
                <a class="border-bottom border-black border-2 mx-2" href="index.php?notepad" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-users mx-2"> </i>Notes</a>
                <div class="sidenav-footer">
                    <a class="border-bottom border-black border-2" href="index.php?logout" onclick="fireSwal(); return false;" data-toggle="tooltip" data-placement="bottom" title="LOGOUT"><i class="fa fa-sign-out-alt mx-2"></i>LOGOUT</a>
                </div>
            </div>
            <a class="navbar-brand" href="index.php?dashboard">
                <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40">
            </a>
            <span style="font-size: 30px; cursor: pointer; color: #ec5b33; " onclick="openNav()">&#9776;</span>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Your navigation items go here -->
                </ul>
            </div>
        </div>
    </nav>



</header>

<body>
    <div id="page-container">
        <?php
        if (isset($_GET['job-application']) || isset($_GET['job-application-declined']) || isset($_GET['job-application-interview'])) {
            $breadcrumbItems = [
                'job-application' => 'Pending Application',
                'job-application-interview' => 'For Interview',
                'job-application-declined' => 'Declined Applicants'
            ];
            $currentPage = $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'];
        ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php
                    foreach ($breadcrumbItems as $key => $value) {
                        $isActive = isset($_GET[$key]);
                        $disabledAttr = $isActive ? 'disabled' : '';
                    ?>
                        <li class="breadcrumb-item <?php echo $isActive ? 'active' : ''; ?>" style="color: #ec5b33;" aria-current="page">
                            <?php if ($isActive) { ?>
                                <span><?php echo $value; ?></span>
                            <?php } else { ?>
                                <a href="index.php?<?php echo $key; ?>" <?php echo $disabledAttr; ?>><?php echo $value; ?></a>
                            <?php } ?>
                        </li>
                    <?php
                    }
                    ?>
                </ol>
            </nav>
            <hr class="solid mx-4  ">
        <?php
        }
        ?>

        <title>Employee</title>
        <div id="main">
        <link rel="stylesheet" href="../assets/css/employee.css">
            <!-- title page and search bar  -->
            <div class="d-flex justify-content-between align-items-center mx-2">
                <div>
                    <p class="text-center lead ms-3 mt-3">
                    <h3 class="mx-2"><span id="jobCount"></span> Employees</h3>
                </div>
                <form class="d-flex forms my-3">
                    <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addEmployee"><i class="fa-solid fa-user-plus"></i></button>
                    <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for Employee">
                </form>
            </div>

            <!-- main content -->

            <div class="container-fluid">
                <div id="jobsContainer" class="row justify-content-center align-items-center">
                    <!-- card content -->
                    <div class="col-md-auto d-flex">
                        <?php
                        // Assuming you have established a database connection

                        // Retrieve data from the table
                        $query = "SELECT * FROM employees";
                        $result = mysqli_query($connection, $query);
                        $employeeCount = mysqli_num_rows($result);

                        // Check if there are any rows in the table
                        if (mysqli_num_rows($result) > 0) {
                            // Iterate over each row and generate the card dynamically
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $department = $row['department'];
                                $contact = $row['contact'];
                                $dateHired = date('m/dY', strtotime($row['date_hired'])); // Format date as 'YYYY-MM-DD'

                                // Generate the HTML for each card dynamically
                                echo '
              <div class="card mx-2">
                <div class="col-md-auto d-flex justify-content-end mb-4">
                  <button type="button" class="btn rounded-pill edit-button justify-content-end" data-bs-toggle="modal" data-bs-target="#employeeModal" data-id="' . $id . '" data-name="' . $name . '" data-contact="' . $contact . '" data-date-hired="' . $dateHired . '"><i class="fa-solid fa-ellipsis fa-xl" style="color: #ec5b33;"></i></button>
                </div>
                <div class="card-container">
                  <h5 class="card-title text-muted">' . $department . '</h5>
                  <p class="card-text" data-id="' . $id . '"></p>
                  <p class="card-text">Name: ' . $name . '</p>
                  <p class="card-text">Contact: ' . $contact . '</p>
                  <p class="card-text">Date Hired: ' . $dateHired . '</p>
                </div>
              </div>
            ';
                            }
                        } else {
                            // Handle case when there are no rows in the table
                            echo '<p>No data available.</p>';
                        }

                        // Close the database connection
                        mysqli_close($connection);
                        ?>
                    </div>
                </div>
            </div>


            <?php
            // Check if the update button is clicked
            if (isset($_POST['updateEmployee'])) {
                // Get the employee ID from the form input
                $id = $_POST['employeeId'];

                // Get the updated values from the form inputs
                $name = $_POST['nameInput'];
                $contact = $_POST['contactInput'];
                $dateHired = $_POST['dateHiredInput'];

                // Assuming you have established a database connection

                // Update the employee record in the database
                $query = "UPDATE employees SET name='$name', contact='$contact', date_hired='$dateHired' WHERE id=$id";
                $result = mysqli_query($connection, $query);

                if ($result) {
                    // Update successful
                    echo '<script>alert("Employee record updated successfully.");</script>';
                } else {
                    // Update failed
                    echo '<script>alert("Error updating employee record: ' . mysqli_error($connection) . '");</script>';
                }

                // Close the database connection
                mysqli_close($connection);
            }
            ?>
                <?php include '../admin/modals/employee-modal.php' ?>
        </div>
    </div>
</body>
<footer class="mt-3" style="background-color: transparent;">
    &copy; Copyright <strong><span>Tiger's Mark Corporation</span></strong>. All Rights Reserved
</footer>

<script>
    function openNav() {
        const sidenav = document.getElementById("mySidenav");
        const main = document.getElementById("main");
        const container = document.getElementById("container");
        const body = document.body;

        sidenav.style.width = "250px";
        a
        main.style.transition = "margin-left 0.5s"; // Add transition property
        main.style.marginLeft = "250px";
        container.style.transform = "translateX(-250px)";
        body.style.backgroundColor = "rgba(0, 0, 0, 0.4)";
        body.style.boxShadow = "solid";
    }

    function closeNav() {
        const sidenav = document.getElementById("mySidenav");
        const main = document.getElementById("main");
        const container = document.getElementById("container");
        const body = document.body;

        sidenav.style.width = "0";
        main.style.transition = "margin-left 0.5s"; // Add transition property
        main.style.marginLeft = "0";
        container.style.transform = "translateX(0)";
        body.style.backgroundColor = "white";
    }

    const displayTime = document.querySelector(".display-time");

    function showTime() {
        const time = new Date();
        const hours = time.getHours() % 12 || 12;
        const minutes = time.getMinutes().toString().padStart(2, "0");
        const seconds = time.getSeconds().toString().padStart(2, "0");
        const period = time.getHours() >= 12 ? "PM" : "AM";

        displayTime.innerText = `${hours}:${minutes}:${seconds} ${period}`;
        setTimeout(showTime, 1000);
    }
    showTime();

    function updateDate() {
        const today = new Date();
        const dayName = today.toLocaleDateString("en-US", {
            weekday: "long"
        });
        const dayNum = today.getDate();
        const month = today.toLocaleDateString("en-US", {
            month: "long"
        });
        const year = today.getFullYear();

        document.getElementById("day").textContent = dayName;
        document.getElementById("daynum").textContent = dayNum;
        document.getElementById("month").textContent = month;
        document.getElementById("year").textContent = year;
    }
    updateDate();

    // function redirectToPage(url) {
    //   window.location.href = url; 
    // }
</script>



<script>
    // Update the job count
    var jobCount = document.getElementById('jobCount');
    jobCount.textContent = '<?php echo $employeeCount; ?>';

    // Get the modal element
    var employeeModal = document.getElementById('employeeModal');

    // Attach a click event listener to each edit button
    var editButtons = document.querySelectorAll('.edit-button');
    editButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var id = button.getAttribute('data-id');
            var name = button.getAttribute('data-name');
            var contact = button.getAttribute('data-contact');
            var dateHired = button.getAttribute('data-date-hired');

            // Update the modal content
            var jobLabel = employeeModal.querySelector('#jobLabel');
            jobLabel.textContent = 'Edit Profile';

            var overview = employeeModal.querySelector('#overview');
            overview.textContent = '';

            var modalBody = employeeModal.querySelector('.modal-body');
            var rows = modalBody.querySelectorAll('.col-6 p.card-text');
            rows[0].textContent = 'Name: ' + name;
            rows[1].textContent = 'Contact: ' + contact;
            rows[2].textContent = 'Date Hired: ' + dateHired;

            // Set the form values
            var nameInput = document.getElementById('nameInput');
            var contactInput = document.getElementById('contactInput');
            var dateHiredInput = document.getElementById('dateHiredInput');
            var employeeIdInput = document.getElementById('employeeId');

            nameInput.value = name;
            contactInput.value = contact;
            dateHiredInput.value = dateHired;
            employeeIdInput.value = id;
        });
    });

    // Submit the update form in the employeeModal
    var btnUpdateModal = document.getElementById('btnupdateModal');
    btnUpdateModal.addEventListener('click', function() {
        document.getElementById('updateForm').submit();
    });
</script>

<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="../assets/css/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/js/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>


</html>