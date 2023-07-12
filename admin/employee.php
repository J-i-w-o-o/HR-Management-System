<title>Employee</title>
<link rel="stylesheet" href="../assets/css/employee.css">
<div id="main">

  <!-- title page and search bar  -->
  <div class="d-flex justify-content-between align-items-center mx-2">
    <div>
      <h4 class="text-center lead ms-3 mt-2 panel-primary"><span id="jobCount"></span>(put here no. of employee)</h4>
    </div>
    <form class="d-flex forms my-3">
      <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for Employee">
    </form>
  </div>

  <!-- card content -->
  <div class="text-center">
  </div>
  <div class="container-fluid">
    <div id="jobsContainer" class="row">
      <div class="col-md-4 mb-3 d-flex">

        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="DITO MAD-DISPLAY YUNG PROFILE NG EMPLOYEE">

          <div class="card-body">
            <h5 class="card-title text-muted">Position/Department</h5>
            <p class="card-text">Name:</p>
            <p class="card-text">Contact:</p>
            <p class="card-text">Date Hired:</p>
          </div>

          <div class="card-footer">
            <button type="button" class="btn rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal"><i class="fa-solid fa-user-pen" style="color: #ec5b33;"></i></button>
          </div>

        </div>
      </div>

      <!-- modal start here -->
      <div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content custom-scrollbar">
            
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="jobLabel"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <h2>Edit Profile</h2>
              <p id="overview"></p>
              <div class="row">
                <div class="col-6">
                  <p class="card-text">Name:</p>
                  <p class="card-text">Contact:</p>
                  <p class="card-text">Date Hired:</p>
                  <p class="card-text">Resume:</p>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" id="btnclose" class="btn"><i class="fa-solid fa-user-minus"></i></button>
              <button type="submit" id="btnappsubmit" class="btn " form="applicationform"><i class="fa-solid fa-pen"></i></button>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>