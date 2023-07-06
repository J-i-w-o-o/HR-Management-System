<title>Job Application</title>
<?php include 'C:\xampp\htdocs\HR-Management-System\assets\css\job-application.css';?>
<div class="container-fluid" id="main">
  <div id="tableres">
    <div class="container-fluid" id="main">
      <h2 class="mt-2">JOB APPLICATION</h2>

      <div id="tableres" style="overflow-x:auto;">
        <table>
          <div>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Address</th>
              <th>mobile</th>
              <th>Email</th>
              <th>Resume</th>
              <th>Action</th>
            </tr>
          </div>
          <?php 
          include 'C:\xampp\htdocs\HR-Management-System\includes\job-applicationconf.php';?>
        </table>
      </div>
    </div>