<title>Job Application</title>
<?php require 'C:\xampp\htdocs\PHP-Structure\assets\css\job-application.css' ?>
<div class="container-fluid" id="main">
  <div id="tableres">
<style>

table {
  border-color: red;
  border-collapse: collapse;
  width: 100%;

  
}

#tableres{
    margin-top: 10px;
    
   
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid black;
  border-collapse: collapse;
}

</style>


    
<!-- Table start here -->

<div class="container-fluid" id="main" >
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
      // PHP code to fetch and display job application data
      // Connect to your database (Update database credentials as per your setup)
      $host = "localhost";
      $username = "root";
      $password = "";
      $database = "hrms";

      $conn = mysqli_connect($host, $username, $password, $database);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch data from the "job_application" table
      $sql = "SELECT * FROM job_applications";
      $result = mysqli_query($conn, $sql);

      // Display the data in table rows
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['firstname']."</td>";
          echo "<td>".$row['address']."</td>";
          echo "<td>".$row['mobile']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td></td>";
          echo "<td> <button type='button' id='btnclose' class='btn'><i class='fa-solid fa-square-check' style='color: #149016;'></i></button><button type='button' class='btn no-border'> <i class='fa-solid fa-square-xmark' style='color: #a61111;'></i></button></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='8'>No job applications found.</td></tr>";
      }

      // Close the database connection
      mysqli_close($conn);
      ?>
      
    </table>
  </div>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

 
