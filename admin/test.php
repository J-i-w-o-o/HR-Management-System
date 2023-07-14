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
            <hr class="solid mx-4">
        <?php
        }
        ?>
        <title>Dashboard</title>
        <div id="main">
            <link rel="stylesheet" href="../assets/css/node_modules/dashboard.css">
            <div class="container-fluid px-4" id=main>
                <section id="hero" class="align-items-center">

                    <div class="row">
                        <div class="container">
                            <div class="display-date">
                                <span class="display-time"></span>
                                <span id="day">day</span>,
                                <span id="daynum">00</span>
                                <span id="month">month</span>
                                <span id="year">0000</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header text-white"> Job Listing </div>
                                <div class="card-body bg-#ec5b33 text-dark" style="font-size: 2rem;"> 1million</div>
                                <div class="card-footer border-dark d-flex align-items-center justify-content-between">
                                    <a class="small text-dark stretched-link" href="index.php?job-listing">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header bg-#ec5b33 text-white"> No. of Pending Applicants </div>
                                <div class="card-body text-dark" style="font-size: 2rem;"> 10000 </div>
                                <div class="card-footer border-dark d-flex align-items-center justify-content-between">
                                    <a class="small text-dark stretched-link" href="index.php?job-application">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
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

    function fireSwal() {
        Swal.fire({
            title: 'LOGOUT',
            text: 'Are you sure you want to logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
        }).then((result) => {
            if (result.isConfirmed) {
                // Perform logout action here
                console.log('User logged out');
                window.location.href = 'index.php?logout'; // Redirect to the logout URL
            }
        });
    }
</script>

<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="../assets/css/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/js/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>


</html>