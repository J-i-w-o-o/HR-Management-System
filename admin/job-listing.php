
<?php include '../admin/modals/job-listing-modal.php'?>
<section id="hero" class="pt-5 mt-8 align-items-center">
<div id="main">
<div class="container-fluid" id="main">
  <div class="text-center"></div>
  <div class="d-flex justify-content-between align-items-center mx-2">
    <div>
      <h4 class="text-center lead"><span id="jobCount"></span> Jobs Found</h4>
    </div>
    <div class="d-flex">
      <div class="mx-2 my-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addJobModal">
          <i class="fas fa-plus"></i> Add Job
        </button>
      </div>
      <form class="d-flex forms my-3">
        <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for a job">
        <button type="submit" class="btn btn-sm" id="searchIcon">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
  </div>
  <div id="jobsContainer" class="row"></div>
  <nav aria-label="Jobs Pagination">
    <ul id="pagination" class="pagination justify-content-center"></ul>
  </nav>
</div>
 <script src="../includes/joblist-view-admin.js"></script>


          
       