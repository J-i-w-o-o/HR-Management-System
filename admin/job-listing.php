<title>Job Listings</title>
<div class="text-center">
  <h1 class="mb-3">Job Listings</h1>
</div>
<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mx-2">
    <h4 class="text-center lead"><span id="jobCount"></span> Jobs Found</h4>
    <form class="d-flex forms">
      <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for a job">
      <button type="submit" class="btn btn-sm" id="searchIcon">
        <i class="fas fa-search"></i>
      </button>
    </form>
  </div>
  <div id="jobsContainer" class="row"></div>
  <nav aria-label="Jobs Pagination">
    <ul id="pagination" class="pagination justify-content-center"></ul>
  </nav>
</div>


<!-- Modal -->
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
            <h4>Job  Level</h4>
            <p class="fs-6 px-1" id="jobLevel"></p>
          </div>
        </div>
        <h4>Location</h4>
            <p class="fs-6 px-1" id="location"></p>
        <div class="row">
          <div class="col-12">
            <h4>Additional Information</h4>
            <p>Fill Up the form below to proceed your application.</p>
            <span id="additionalInfo" class="form-control" rows="3" disabled></span>
            <!-- Forms for application -->
            <form id="applicationform">
            <h5>Fill Up:</h5>
            <div class="form-group my-2 mt-3">
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter Full Name" required>
                </div>

                <div class="form-group mb-2">
                    <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address" required>
                </div>
                
                <div class="form-group mb-2">
                    <input type="tel" id="mobile" name="mobile" maxlength="11" class="form-control" placeholder="Enter Mobile Number" required>
                </div>

                <div class="form-group mb-2">
                    <input type="email" id="email" name="email" pattern="[^ @]*@[^ @]*" title="Invalid email address" class="form-control" placeholder="Enter Email" required>
                </div>

                <div class="form-group mt-3">
                <h5>Attach resume/cv:</h5>
                <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
           
            </form>
            
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" id="btnclose" class="btn" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="btnappsubmit" class="btn " form="applicationform" >Apply</button>
      </div>
    </div>
  </div>
</div>
<script src="joblist-view.js"></script>