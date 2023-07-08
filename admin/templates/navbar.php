<link rel="stylesheet" href="../assets/css/navbar.css">
</head>

<body style="background-color: #FFF4F4;">

<div id="mySidenav" class="sidenav">
<body>
<div id="mySidenav" class="sidenav shadow rounded">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <a class="border-bottom border-black border-2 mx-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-home mx-2"> </i>DASHBOARD</a>
    <a class="border-bottom border-black border-2 mx-2" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="fa fa-list mx-2"> </i>JOB LISTING</a>
    <div class="dropdown">
  <a href="#" class="dropdown-toggle" onclick="toggleDropdown()"> <i class="fa fa-file mx-2"> </i> JOB APPLICATION</a>
  <div class="dropdown-content" >
    <a href="index.php?job-application">Pending Application</a>
    <a href="index.php?job-application-accepted">Approved Application</a>
    <a href="index.php?job-application-declined">Declined Application</a>
  </div>
</div>
    
    <div class="sidenav-footer">
        <a class="border-bottom border-white border-2" href="index.php?logout" data-toggle="tooltip" data-placement="bottom" title="LOGOUT"><i class="fa fa-sign-out-alt mx-2"></i>LOGOUT</a>
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