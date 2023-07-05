<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<div id="main">

<div id="tableres">
  <table>
    <div>
    <tr>
      <th>No.</th>
      <th>Position</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phonenumber</th>
      <th>Date</th>
      <th>Submitted by</th>
      <th>Status</th>
      
    </tr>
    </div>
    <tr>
     
      
    </tr>
    <tr>
      
      
    </tr>
    <tr>
      
      
    </tr>
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

    
</body>
</html>