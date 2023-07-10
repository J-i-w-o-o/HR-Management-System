<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/node_modules/mdb-ui-kit/css/mdb.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/job-application.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <title>TIGER'S MARK CORPORATION</title>
    <link rel="icon" href="../assets/images/TMC_LOGO.png">
</head>
<header>
    <div id="mySidenav" class="sidenav shadow rounded">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a class="border-bottom border-black border-2 mx-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-tachometer mx-2"> </i>Dashboard</a>
        <a class="border-bottom border-black border-2 mx-2" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="fa fa-list mx-2"> </i>Job Listing</a>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" onclick="toggleDropdown()"> <i class="fa fa-file mx-2"> </i> Job Application</a>
            <div class="dropdown-content">
                <a href="index.php?job-application"><i class="fa fa-clock mx-2"> </i>Pending Application</a>
                <a href="index.php?job-application-accepted"><i class="fa fa-user-plus mx-2"> </i>Approved Applicants</a>
                <a href="index.php?job-application-declined"><i class="fa fa-user-times mx-2"> </i>Declined Applicants</a>
                <a href="index.php?job-application-interview"><i class="fa fa-user mx-2"> </i>For Interview</a>
            </div>
        </div>
        <div class="sidenav-footer">
            <a class="border-bottom border-black border-2" href="index.php?logout" data-toggle="tooltip" data-placement="bottom" title="LOGOUT"><i class="fa fa-sign-out-alt mx-2"></i>LOGOUT</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <span style="font-size: 30px; cursor: pointer; color: #ec5b33; " onclick="openNav()">&#9776;</span>
            <a class="navbar-brand" href="index.php?dashboard">
                <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40">
            </a>
        </div>
    </nav>
</header>

<body>
    <div id="page-container">
        
    </div>
</body>
<footer>
    <div class="container footer-bottom clearfix text-center">
        <div class="copyright">
            &copy; Copyright <strong><span>Tiger's Mark Corporation</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("container").style.transform = "translateX(-250px)";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        document.body.style.boxShadow = "solid";


    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("container").style.transform = "translateX(0)";
        document.body.style.backgroundColor = "white";
    }

    function toggleDropdown() {
        var dropdownContent = document.querySelector('.dropdown-content');
        var dropdown = document.querySelector('.dropdown');
        dropdown.classList.toggle('active');
        if (dropdown.classList.contains('active')) {
            dropdownContent.style.display = 'block';
        } else {
            dropdownContent.style.display = 'none';
        }
    }
</script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</html>