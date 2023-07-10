<header>
    <div id="mySidenav" class="sidenav shadow rounded">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a class="border-bottom border-black border-2 mx-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-tachometer mx-2"> </i>Dashboard</a>
        <a class="border-bottom border-black border-2 mx-2" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="fa fa-list mx-2"> </i>Job Listing</a>
        <a class="border-bottom border-black border-2 mx-2" href="index.php?job-application" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-file mx-2"> </i>Job Application</a>
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
   
<?php 
if (isset($_GET['job-application']) || isset($_GET['job-application-accepted'])|| isset($_GET['job-application-declined'])|| isset($_GET['job-application-interview'])) {
?>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page"><a href="index.php?job-application">Pending Application</a></li>
    <li class="breadcrumb-item active" aria-current="page" ><a href="index.php?job-application-accepted">Approved Applicants</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php?job-application-declined">Declined Applicants</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php?job-application-interview">For Interview</a></li>
  </ol>
  </nav>
<?php
}
?>

</header>
<body>
<div id="page-container">


 
 
