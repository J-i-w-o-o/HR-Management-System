<header>

  <nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="dark">
    <div class="container-fluid ">
      <div id="mySidenav" class="sidenav shadow rounded">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- <a class="border-bottom border-black border-2 mx-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-tachometer mx-2"> </i>Dashboard</a>
    <a class="border-bottom border-black border-2 mx-2" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="Job Listing"><i class="fa fa-list mx-2"> </i>Job Listing</a>
    <a class="border-bottom border-black border-2 mx-2" href="index.php?job-application" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-file mx-2"> </i>Job Application</a>
    <a class="border-bottom border-black border-2 mx-2" href="index.php?employee" data-toggle="tooltip" data-placement="bottom" title="Employee"><i class="fa fa-users mx-2"> </i>Employees</a>

    <div class="sidenav-footer">
      <a class="border-bottom border-black border-2" href="index.php?logout" onclick="fireSwal(); return false;" data-toggle="tooltip" data-placement="bottom" title="LOGOUT"><i class="fa fa-sign-out-alt mx-2"></i>LOGOUT</a>
    </div> -->
        <nav class="sidebar close">
          <header>
            <div class="image-text">
            <span class="image d-flex justify-content-center pb-4">
              
                <!-- <img src="../assets/images/TMC_LOGO.png"alt="logo" width="155" height="50" > -->
              </span>

              <!-- <div class="text logo-text">
                    <span class="name">TMC</span>
                    
                </div> -->
            </div>

          </header>

          <div class="menu-bar">
            <div class="menu">

              <ul class="menu-links">
                <li class="nav-link">
                  <a href="index.php?dashboard">
                    <i class='bx bx-home-alt icon'></i>
                    <span class="text nav-text">Dashboard</span>
                  </a>
                </li>

                <li class="nav-link">
                  <a href="index.php?job-listing">
                    <i class='bx bx-list-ul icon'></i>
                    <span class="text nav-text">Job Listing</span>
                  </a>
                </li>

                <li class="nav-link">
                  <a href="index.php?job-application">
                    <i class='bx bx-file icon'></i>
                    <span class="text nav-text">Job Application</span>
                  </a>
                </li>

                <li class="nav-link">
                  <a href="index.php?employee">
                    <i class='bx bx-user-pin icon'></i>
                    <span class="text nav-text">Employees</span>
                  </a>
                </li>

                <li class="nav-link">
                  <a href="index.php?attendance">
                    <i class='bx bx-calendar icon'></i>
                    <span class="text nav-text">Attendance</span>
                  </a>
                </li>


              </ul>
            </div>

            <div class="sidenav-footer">
              <li class="nav-link">
                <a href="index.php?logout" onclick="fireSwal(); return false;">
                  <i class='bx bx-log-out icon'></i>
                  <span class="text nav-text">Logout</span>
                </a>
              </li>



            </div>
          </div>

        </nav>
      </div>
      
      <a class="navbar-brand" href="index.php?dashboard">
        
        <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40">
      </a>
      <span style="font-size: 30px; cursor: pointer; color: #ec5b33; " onclick="openNav()">&#9776;</span>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <!-- Your navigation items go here -->
        </ul>
      </div>
    </div>
  </nav>



</header>

<body>
  <div id="page-container">
    <?php
    if (isset($_GET['job-application']) || isset($_GET['job-application-declined']) || isset($_GET['job-application-interview'])) {
      $breadcrumbItems = [
        'job-application' => 'Pending Application',
        'job-application-interview' => 'For Interview',
        'job-application-declined' => 'Declined Applicants'
      ];
      $currentPage = $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'];
    ?>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <?php
          foreach ($breadcrumbItems as $key => $value) {
            $isActive = isset($_GET[$key]);
            $disabledAttr = $isActive ? 'disabled' : '';
          ?>
            <li class="breadcrumb-item <?php echo $isActive ? 'active' : ''; ?>" style="color: #ec5b33;" aria-current="page">
              <?php if ($isActive) { ?>
                <span><?php echo $value; ?></span>
              <?php } else { ?>
                <a href="index.php?<?php echo $key; ?>" <?php echo $disabledAttr; ?>><?php echo $value; ?></a>
              <?php } ?>
            </li>
          <?php
          }
          ?>
        </ol>
      </nav>
      <hr class="solid mx-4  ">
    <?php
    }
    ?>