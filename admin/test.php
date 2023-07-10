<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/node_modules/mdb-ui-kit/css/mdb.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/job-application.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
    <title>TIGER'S MARK CORPORATION</title>
    <link rel="icon" href="../assets/images/TMC_LOGO.png">
</head>
<header>

    <div id="mySidenav" class="sidenav shadow rounded">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a class="border-bottom border-black border-2 mx-2" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="fa fa-tachometer mx-2"> </i>Dashboard</a>
        <a class="border-bottom border-black border-2 mx-2" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="fa fa-list mx-2"> </i>Job Listing</a>
        <a class="border-bottom border-black border-2 mx-2" href="index.php?job-application" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-file mx-2"> </i>Job Application</a>
        <a class="border-bottom border-black border-2 mx-2" href="index.php?employee" data-toggle="tooltip" data-placement="bottom" title="JOB APPLICATION"><i class="fa fa-file mx-2"> </i>Employees</a>
        <div class="sidenav-footer">

            <a class="border-bottom border-black border-2" href="index.php?logout" onclick="fireSwal(); return false;" data-toggle="tooltip" data-placement="bottom" title="LOGOUT"><i class="fa fa-sign-out-alt mx-2"></i>LOGOUT</a>

        </div>
    </div>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <span style="font-size: 30px; cursor: pointer; color: #ec5b33; " onclick="openNav()">&#9776;</span>
            <a class="navbar-brand" href="index.php?dashboard">
                <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40">
            </a>
        </div>
    </nav>


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
</header>

<body>
    <div id="page-container">
        <title>Employee</title>
        <?php include 'C:\xampp\htdocs\HR-Management-System\assets\css\job-application.css'; ?>
        <link rel="stylesheet" href="../assets/css/employee.css">
        <div id="main">



            <h3>No. of Employees</h3>

            <div class="row ms-2 me-2">
                <div class="column">
                    <div class="card">
                        <div class="float-right">
                            <button class="editbtn no-border"><i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                        <div id="image-display"></div>
                        <input type="file" id="image-upload" accept="uploads/*">
                        <button id="upload-button" class="btn btn-primary" onclick="uploadImage()" disabled>Upload Image</button>

                        <p>Some text</p>
                        <p>Some text</p>
                    </div>


                </div>


            </div>
        </div>
    </div>


    </div>
</body>
<footer>
    <div class="container footer-bottom clearfix text-center">
        <div class="copyright">
            &copy; Copyright <strong><span>Tiger's Mark Corporation</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("container").style.transform = "translateX(-250px)";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        document.body.style.boxShadow = "solid";


    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("container").style.transform = "translateX(0)";
        document.body.style.backgroundColor = "white";
    }


    const displayTime = document.querySelector(".display-time");

    // Time
    function showTime() {
        let time = new Date();
        let hours = time.getHours();
        let period = hours >= 12 ? "PM" : "AM";
        hours = hours % 12 || 12;
        let minutes = time.getMinutes();
        let seconds = time.getSeconds();
        displayTime.innerText = `${hours}:${minutes
.toString()
.padStart(2, "0")}:${seconds.toString().padStart(2, "0")} ${period}`;
        setTimeout(showTime, 1000);
    }
    showTime();
    // Date
    function updateDate() {
        let today = new Date();

        // return number
        let dayName = today.getDay(),
            dayNum = today.getDate(),
            month = today.getMonth(),
            year = today.getFullYear();

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        const dayWeek = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ];
        // value -> ID of the html element
        const IDCollection = ["day", "daynum", "month", "year"];
        // return value array with number as a index
        const val = [dayWeek[dayName], dayNum, months[month], year];
        for (let i = 0; i < IDCollection.length; i++) {
            document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
        }
    }
    updateDate();

    function redirectToPage(url) {
        window.location.href = url;
    }

    function fireSwal() {
        Swal.fire({
            text: 'Are you sure you want to logout?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
        }).then((result) => {
            if (result.isConfirmed) {
                // Perform logout action here
                console.log('User logged out');
                window.location.href = 'index.php?logout'; // Redirect to the logout URL
            }
        });
    }

    function toggleEdit() {
  const fileInput = document.getElementById('image-upload');
  const uploadButton = document.getElementById('upload-button');
  
  // Toggle the disabled state of the file input element and upload button
  fileInput.disabled = !fileInput.disabled;
  uploadButton.disabled = !uploadButton.disabled;
}

function uploadImage() {
  // Get the file input element
  const fileInput = document.getElementById('image-upload');
  
  // Check if the file input element is enabled (edit button is clicked)
  if (!fileInput.disabled && fileInput.files.length > 0) {
    const file = fileInput.files[0];
    const reader = new FileReader();
    
    // Read the file as data URL
    reader.readAsDataURL(file);
    
    // Handle the file loading
    reader.onload = function(e) {
      const imageDisplay = document.getElementById('image-display');
      
      // Create an image element
      const image = document.createElement('img');
      
      // Set the source of the image to the data URL
      image.src = e.target.result;
      
      // Apply CSS styles to resize the image
      image.style.maxWidth = '100%';
      image.style.maxHeight = '100%';
      image.style.objectFit = 'contain';
      
      // Clear the previous contents of the card
      imageDisplay.innerHTML = '';
      
      // Append the image to the display element
      imageDisplay.appendChild(image);
    }
  }
}

</script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>



</html>