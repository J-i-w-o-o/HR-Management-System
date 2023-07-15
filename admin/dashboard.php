<?php
// Get the number of job listings from the careers.json file
$careersFile = '../assets/data/careers.json';
$careersData = file_get_contents($careersFile);
$careers = json_decode($careersData, true);
$noOfJobs = count($careers);

// Get the number of pending applicants from the job_applications table
$pendingApplicantsQuery = "SELECT COUNT(*) AS pendingApplicants FROM job_applications WHERE status = 'pending'";
$pendingApplicantsResult = $connection->query($pendingApplicantsQuery);
$row = $pendingApplicantsResult->fetch_assoc();
$pendingApplicants = $row['pendingApplicants'];

// Get the number of employees from the employees table
$totalEmployeesQuery = "SELECT COUNT(*) AS totalEmployees FROM employees";
$totalEmployeesResult = $connection->query($totalEmployeesQuery);
$row = $totalEmployeesResult->fetch_assoc();
$totalEmployees = $row['totalEmployees'];
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
            <div class="card-header text-white"> No. of Job Listing </div>
            <div class="card-body bg-#ec5b33 text-dark" style="font-size: 2rem;"><?php echo $noOfJobs; ?></div>
            <div class="card-footer border-dark d-flex align-items-center justify-content-between">
              <a class="small text-dark stretched-link" href="index.php?job-listing">View Details</a>
              <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header bg-#ec5b33 text-white"> No. of Pending Applicants </div>
            <div class="card-body text-dark" style="font-size: 2rem;"><?php echo $pendingApplicants; ?></div>
            <div class="card-footer border-dark d-flex align-items-center justify-content-between">
              <a class="small text-dark stretched-link" href="index.php?job-application">View Details</a>
              <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header bg-#ec5b33 text-white"> No. of Employees </div>
            <div class="card-body text-dark" style="font-size: 2rem;"><?php echo $totalEmployees; ?></div>
            <div class="card-footer border-dark d-flex align-items-center justify-content-between">
              <a class="small text-dark stretched-link" href="index.php?employee">View Details</a>
              <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>