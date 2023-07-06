<link rel="stylesheet" href="../assets/css/navbar.css">
</head>
<body style="background-color: #FFF4F4;">

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="border-bottom border-white border-2 mx-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-home mx-2"></i>DASHBOARD</a>
    <a class="border-bottom border-white border-2 mx-2" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="fa fa-user mx-2"></i>JOB LISTING</a>
    <a href="index.php?job-application" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-user mx-2"></i>JOB APPLICATION</a>
    <div class="sidenav-footer">
      <a class="border-bottom border-white border-2" href="index.php?logout" data-toggle="tooltip" data-placement="bottom" title="LOGOUT"><i class="fa fa-sign-out-alt mx-2"></i>LOGOUT</a>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <span style="font-size: 30px; cursor: pointer; color: #ec5b33; " onclick="openNav()">&#9776;</span>
      <a class="navbar-brand mx-3" href="index.php?dashboard">
        <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Add your navbar links here -->
      </div>
    </div>
  </nav>
  </div>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.getElementById("container").style.transform = "translateX(-250px)";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.getElementById("container").style.transform = "translateX(0)";
      document.body.style.backgroundColor = "white";
    }
  </script>