<link rel="stylesheet" href="../assets/css/navbar.css">
</head>

<body>

<div id="mySidenav" class="sidenav shadow rounded">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <a class="border-bottom border-black border-2 mx-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-tachometer mx-2"> </i>Dashboard</a>
    <a class="border-bottom border-black border-2 mx-2" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="fa fa-list mx-2"> </i>Job Listing</a>
    <div class="dropdown">
  <a href="#" class="dropdown-toggle" onclick="toggleDropdown()"> <i class="fa fa-file mx-2"> </i> Job Application</a>
  <div class="dropdown-content" >
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

  <nav class="navbar navbar-expand-lg" data-bs-theme="dark" >
    <div class="container-fluid">
      <span style="font-size: 30px; cursor: pointer; color: #ec5b33; " onclick="openNav()">&#9776;</span>
      <a class="navbar-brand" href="index.php?dashboard">
        <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40" >
      </a>
      
  </nav>
  </div>