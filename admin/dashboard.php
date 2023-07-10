<style>
  .container {
    color: #12294a;
  }
</style>
<title>Dashboard</title>
<?php include 'C:\xampp\htdocs\HR-Management-System\assets\css\job-application.css'; ?>
<div id="main">
  <link rel="stylesheet" href="../assets/css/node_modules/dashboard.css">
  <div class="container-fluid px-4" id=main>
    <section id="hero" class="align-items-center">
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
        <div class="col-xl-3 col-md-6">
          <div class="container">
            <div class="display-date">
              <span id="day">day</span>,
              <span id="daynum">00</span>
              <span id="month">month</span>
              <span id="year">0000</span>
            </div>
            <div class="display-time"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>