
    <title>Job Application</title>
    <link rel="stylesheet" href="../assets/css/main.css">

    
<!-- Your existing HTML code -->
   
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<span style="font-size:30px;cursor:pointer;color:#ec5b33" onclick="openNav()">&#9776; </span>



<div id="container">
  <div id="tableres">
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
          echo "<td> <button type='button' id='btnclose' class='btn'>Close</button> <button type='button' id='btnclose' class='btn'>Close</button> </td>";
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

 
