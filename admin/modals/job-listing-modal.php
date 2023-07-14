<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content custom-scrollbar">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="jobLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editForm" action="../includes/jobstListingConf.php" method="post">
          <input type="text" class="form-control" id="title" name="title" hidden>
          <input type="text" class="form-control" name="lastUpdate" value="<?php echo date('Y-m-d H:i:s'); ?>" hidden>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <label for="overview" class="form-label">Overview</label>
            <textarea class="form-control" id="overview" name="overview" rows="4"></textarea>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="jobType" class="form-label">Job Type</label>
                <input type="text" class="form-control" id="jobType" name="jobType">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="vacancies" class="form-label">No. of Vacancies</label>
                <input type="number" class="form-control" id="vacancies" name="vacancies">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for=" experience" class="form-label">Qualifications</label>
                <textarea class="form-control" id="experience" name="experience" rows="4"></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="jobLevel" class="form-label">Job Level</label>
                <input type="text" class="form-control" id="jobLevel" name="jobLevel">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location">
          </div>
          <div class="mb-3">
            <label for="additionalInfo" class="form-label">Additional Information</label>
            <input type="text" class="form-control" id="additionalInfo" name="additionalInfo">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger" id="deleteButton" name="delete"><i class="fas fa-trash"></i></button>
            <button type="submit"  class="btn btn-success"  id="editButton" name="apply"><i class="fas fa-edit"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="addJobModal" tabindex="-1" aria-labelledby="addJobModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content custom-scrollbar">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addJobModalLabel">Add Job</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addJobForm" action="../includes/jobstListingConf.php" method="post">
          <div class="mb-3">
          <input type="text" class="form-control" name="addlastUpdate" value="<?php echo date('Y-m-d H:i:s'); ?>" hidden>
            <label for="addTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="addTitle" name="addTitle">
          </div>
          <div class="mb-3">
            <label for="addDescription" class="form-label">Description</label>
            <textarea class="form-control" id="addDescription" name="addDescription" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <label for="addOverview" class="form-label">Overview</label>
            <textarea class="form-control" id="addOverview" name="addOverview" rows="4"></textarea>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="addJobType" class="form-label">Job Type</label>
                <input type="text" class="form-control" id="addJobType" name="addJobType">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="addVacancies" class="form-label">No. of Vacancies</label>
                <input type="number" class="form-control" id="addVacancies" name="addVacancies">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="addExperience" class="form-label">Qualifications</label>
                <textarea class="form-control" id="addExperience" name="addExperience" rows="4"></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="addJobLevel" class="form-label">Job Level</label>
                <input type="text" class="form-control" id="addJobLevel" name="addJobLevel">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="addLocation" class="form-label">Location</label>
            <input type="text" class="form-control" id="addLocation" name="addLocation">
          </div>
          <div class="mb-3">
            <label for="addAdditionalInfo" class="form-label">Additional Information</label>
            <input type="text" class="form-control" id="addAdditionalInfo" name="addAdditionalInfo">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="addButton" name="add"><i class="fas fa-plus"></i> Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


      <!-- modal for content start here -->
      <div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content custom-scrollbar">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="jobLabel"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <p id="overview"></p>
              <form id="updateForm" method="POST" action="">
                <div class="row">
                  <div class="col-6">
                    <p class="card-text">Name</p>
                    <input type="text" id="nameInput" name="nameInput" class="form-control" value="">
                    <p class="card-text">Contact</p>
                    <input type="text" id="contactInput" name="contactInput" class="form-control" value="">
                    <p class="card-text">Date Hired</p>
                    <input type="text" id="dateHiredInput" name="dateHiredInput" class="form-control" value="">
                  </div>
                </div>
                <input type="hidden" id="employeeId" name="employeeId" value="">
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" id="btnremove" class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
              <button type="submit" id="btnupdateModal" class="btn btn-success" name="updateEmployee"><i class="fa-solid fa-pen"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- modal for add employee -->
      <div class="modal fade" id="addJobModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content custom-scrollbar">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="jobLabel"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <h2>Add Employee Profile</h2>
              <p id="overview"></p>
              <div class="row">
                <div class="col-6">
                  <p class="card-text">Name</p>
                  <p class="card-text">Contact</p>
                  <p class="card-text">Date Hired</p>
                  <p class="card-text">Resume</p>
                  <p class="card-text">Update Profile Picture</p>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" id="btnremove" class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
              <button type="submit" id="btnupdateAdd" class="btn btn-success" form="applicationform"><i class="fa-solid fa-pen"></i></button>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>

  
      <!-- modal for content start here -->
      <div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content custom-scrollbar">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="jobLabel"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <p id="overview"></p>
              <form id="updateForm" method="POST" action="">
                <div class="row">
                  <div class="col-6">
                    <p class="card-text">Name</p>
                    <input type="text" id="nameInput" name="nameInput" class="form-control" value="">
                    <p class="card-text">Contact</p>
                    <input type="text" id="contactInput" name="contactInput" class="form-control" value="">
                    <p class="card-text">Date Hired</p>
                    <input type="text" id="dateHiredInput" name="dateHiredInput" class="form-control" value="">
                  </div>
                </div>
                <input type="hidden" id="employeeId" name="employeeId" value="">
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" id="btnremove" class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
              <button type="submit" id="btnupdateModal" class="btn btn-success" name="updateEmployee"><i class="fa-solid fa-pen"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- modal for add employee -->
      <div class="modal fade" id="addEmployee" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content custom-scrollbar">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="jobLabel"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <h2>Add Employee Profile</h2>
              <p id="overview"></p>
              <div class="row">
                <div class="col-6">
                  <p class="card-text">Name</p>
                  <p class="card-text">Contact</p>
                  <p class="card-text">Date Hired</p>
                  <p class="card-text">Resume</p>
                  <p class="card-text">Update Profile Picture</p>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" id="btnremove" class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
              <button type="submit" id="btnupdateAdd" class="btn btn-success" form="applicationform"><i class="fa-solid fa-pen"></i></button>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
  