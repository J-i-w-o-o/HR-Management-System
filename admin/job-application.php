<title>Job Application</title>
<div id="main">
  <section id="hero" class=" align-items-center">
    <div class="d-flex justify-content-between align-items-center mx-2">
      <h2 class="mt-2 ms-3"> PENDING APPLICATIONS</h2>
      <form class="d-flex forms my-3">
        <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for Applicant">
        <button type="submit" class="button btn-sm" id="searchIcon">
              <i class="fas fa-search"></i>
            </button>
      </form>
    </div>
    <div id="table-scroll" class="table-scroll">
      <div class="table-wrap">

        <table class="main-table">
          <div id="tableres">

            <div id="tableres" style="overflow-x:auto;">
              <table>
                <div>
                  <tr>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Resume</th>
                    <th>Action</th>
                  </tr>
                </div>
                <?php
                include 'C:\xampp\htdocs\HR-Management-System\includes\job-applicationconf.php'; ?>
              </table>
            </div>
          </div>
        </table>
      </div>
    </div>
  </section>
</div>