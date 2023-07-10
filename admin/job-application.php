<title>Job Application</title>
<?php include 'C:\xampp\htdocs\HR-Management-System\assets\css\job-application.css';?>

<div id="main">
<section id="hero" class="pt-5 mt-8 align-items-center">

  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="index.php?job-application">Pending Application</a></li>
    <li class="breadcrumb-item active" aria-current="page" ><a href="index.php?job-application-accepted">Approved Applicants</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php?job-application-declined">Declined Applicants</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php?job-application-interview">For Interview</a></li>
  </ol> -->

      <h2 class="mt-2 ms-3"> PENDING APPLICATIONS</h2>
      

      <div id="table-scroll" class="table-scroll">
  <div class="table-wrap">
    <table class="main-table">
  <div id="tableres">

      <div id="tableres" style="overflow-x:auto;">
        <table>
          <div>
            <tr>
              <th>Position</th>
              <th>Name</th>
              <th>Address</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Resume</th>
              <th>Action</th>
              <th>Status</th>

            </tr>
          </div>
          <?php 
          include 'C:\xampp\htdocs\HR-Management-System\includes\job-applicationconf.php';?>
        </table>
      </div>
      





          
       