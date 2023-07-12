<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/js/node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="./assets/css/header.css">
</head>

<body style="margin-top: 70px;">
  <header>
    <nav class="navbar fixed-top shadow p-2 mb-4 bg-body-tertiary rounded">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <div>
          <img src="assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40">
        </div>
        <form class="d-flex forms">
          <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for a job">
          <button type="submit" class="btn btn-sm" id="searchIcon">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>
    </nav>
  </header>
  <div class="text-center">
    <h1 class="mb-3">Careers</h1>
  </div>
  <div class="container-fluid">
    <h4 class="text-center lead"><span id="jobCount"></span> Jobs Found</h4>
    <div id="jobsContainer" class="row"></div>
    <nav aria-label="Jobs Pagination">
      <ul id="pagination" class="pagination justify-content-center"></ul>
    </nav>
  </div>
  <div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content custom-scrollbar">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="jobLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2>Overview</h2>
          <p id="overview"></p>
          <div class="row">
            <div class="col-6">
              <h4>Job type</h4>
              <p class="fs-6 px-1" id="jobType"></p>
            </div>
            <div class="col-6">
              <h4>No. of vacancies</h4>
              <p class="fs-6 px-1" id="vacancies"></p>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h4>Qualifications</h4>
              <p class="fs-6 px-1" id="experience"></p>
            </div>
            <div class="col-6">
              <h4>Job Level</h4>
              <p class="fs-6 px-1" id="jobLevel"></p>
            </div>
          </div>
          <h4>Location</h4>
          <p class="fs-6 px-1" id="location"></p>
          <div class="row">
            <div class="col-12">
              <h4>Additional Information</h4>
              <span id="additionalInfo" class="form-control" rows="3" disabled></span>
              <form method="post" enctype="multipart/form-data" id="applicationform">
                <h5>Fill Up:</h5>
                <div class="form-group my-2 mt-3">
                  <input type="text" id="titleInput" name="position" class="form-control" required hidden>
                  <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group mb-2">
                  <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address" required>
                </div>
                <div class="form-group mb-2">
                  <input type="num" id="mobile" name="mobile" maxlength="11" pattern="[0-9]*" title="Please enter only numeric digits." inputmode="numeric" class="form-control" placeholder="Enter Mobile Number" required>
                </div>
                <div class="form-group mb-2">
                  <input type="email" id="email" name="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" title="Invalid email address" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="form-group mt-3">
                  <h5>Attach resume/cv:</h5>
                  <input type="file" name="fileToUpload" id="fileToUpload" required>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnclose" class="btn" data-bs-dismiss="modal">Close</button>
          <button type="button" id="btnappsubmit" class="btn">Apply</button>
        </div>
      </div>
    </div>
  </div>
  <script src="./includes/joblist-view-careers.js"></script>
  <script src="./assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script>
  document.getElementById('btnappsubmit').addEventListener('click', function() {
    const formData = new FormData(document.getElementById('applicationform'));

    fetch('./includes/job-applyconf.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(result => {
      if (result.status === 'success') {
        Swal.fire({
          icon: 'success',
          title: 'Application Submitted',
          text: 'Your application has been successfully submitted. We will contact you shortly.',
          showClass: {
            popup: 'swal2-show',
            backdrop: 'swal2-backdrop-show',
            icon: 'swal2-icon-show'
          },
          hideClass: {
            popup: 'swal2-hide',
            backdrop: 'swal2-backdrop-hide',
            icon: 'swal2-icon-hide'
          },
        }).then(() => {
          window.location.href = './careers.php';
        });
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Application Failed',
          text: result.message,
          showClass: {
            popup: 'swal2-show',
            backdrop: 'swal2-backdrop-show',
            icon: 'swal2-icon-show'
          },
          hideClass: {
            popup: 'swal2-hide',
            backdrop: 'swal2-backdrop-hide',
            icon: 'swal2-icon-hide'
          },
        });
      }

      document.getElementById('applicationform').reset();
    })
    .catch(error => {
      Swal.fire({
        icon: 'error',
        title: 'Application Failed',
        text: 'There was an error submitting your application. Please try again later.',
        showClass: {
          popup: 'swal2-show',
          backdrop: 'swal2-backdrop-show',
          icon: 'swal2-icon-show'
        },
        hideClass: {
          popup: 'swal2-hide',
          backdrop: 'swal2-backdrop-hide',
          icon: 'swal2-icon-hide'
        },
      });
    });
  });
</script>

</body>
</html>
