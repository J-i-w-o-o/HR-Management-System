  <style>
    .sidenav {
      width: 250px;
      background-color: #12294a;
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      z-index: 1;
      overflow-x: hidden;
      padding-top: 60px;
      transition: 0.5s;
      width: 0;
      opacity: 85%;
    }

    .sidenav a {
      padding: 8px 8px 8px 16px;
      text-decoration: none;
      font-size: 18px;
      color: #ec5b33;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: white;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
      transition: 0.3s;
    }
    .sidenav-footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 10px;
    background-color: #12294a;
}
.sidenav-footer a {
    color: #ec5b33;
    display: block;
    padding: 8px 16px;
    text-decoration: none;
}
.sidenav-footer a:hover {
    color: white;
}

    .navbar {
      background-color: transparent;

    }

    .navbar-toggler-icon {
      color: #12294a;
    }

    .collapse.navbar-collapse .navbar-nav .nav-item .nav-link {
      color: #12294a;
      padding: 8px 16px;
    }

  </style>
    
</head>
<body style="background-color: #FFF4F4;">

  <div id="mySidenav" class="sidenav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="border-bottom border-white border-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-home mx-2"> </i>DASHBOARD</a>
    <a href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="fa fa-user mx-2"> </i>JOB LISTING</a>
    <a href="index.php?job-application" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-user mx-2"> </i>JOB APPLICATION</a>
    <div class="sidenav-footer">
        <a href="index.php?logout" data-toggle="tooltip" data-placement="bottom" title="LOGOUT"><i class="fa fa-sign-out-alt mx-2"></i>LOGOUT</a>
  </div>
  </div>
  <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <span style="font-size: 30px; cursor: pointer; color: #ec5b33; " onclick="openNav()">&#9776;</span>
      <a class="navbar-brand" href="index.php?dashboard">
        <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40" >
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
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