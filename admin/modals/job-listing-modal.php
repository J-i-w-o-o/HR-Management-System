<!-- Job Modal -->
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
            <label for="description" class="form-label">Job Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter a detailed job description" aria-label="Job Description"></textarea>
          </div>
          <div class="mb-3">
            <label for="overview" class="form-label">Job Overview</label>
            <textarea class="form-control" id="overview" name="overview" rows="4" placeholder="Enter a brief job overview" aria-label="Job Overview"></textarea>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="jobType" class="form-label">Job Type</label>
                <select class="form-control" id="jobType" name="jobType">
                  <option value="">Select Job type</option>
                  <option value="Full-Time">Full-Time</option>
                  <option value="Part-Time">Part-Time</option>
                  <option value="Temporary/Contract">Temporary/Contract</option>
                  <option value="Internship/OJT">Internship/OJT</option>
                </select>
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
                <label for="experience" class="form-label">Qualifications</label>
                <select class="form-control" id="experience" name="experience">
                  <option value="">Select Qualification</option>
                  <option value="High School Graduate">High School Graduate</option>
                  <option value="SHS Graduate">SHS Graduate</option>
                  <option value="Bachelor's Degree">Bachelor's Degree</option>
                  <option value="Post-Graduate Degree">Post-Graduate Degree</option>
                  <option value="Vocational or Technical Certificate/Diploma">Vocational or Technical Certificate/Diploma</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="jobLevel" class="form-label">Job Level</label>
                <select class="form-control" id="jobLevel" name="jobLevel">
                  <option value="">Select Job Level</option>
                  <option value="Entry-Level">Entry-Level</option>
                  <option value="Junior">Junior</option>
                  <option value="Mid-Level">Mid-Level</option>
                  <option value="Senior">Senior</option>
                  <option value="Lead">Lead</option>
                  <option value="Manager">Manager</option>
                  <option value="Director">Director</option>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter the job location" aria-label="Job Location">
          </div>
          <div class="mb-3">
            <label for="additionalInfo" class="form-label">Additional Information</label>
            <input type="text" class="form-control" id="additionalInfo" name="additionalInfo" placeholder="Enter any additional information about the job" aria-label="Additional Information">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger" id="deleteButton" name="delete"><i class="fas fa-trash"></i></button>
            <button type="submit" class="btn btn-success" id="editButton" name="apply"><i class="fas fa-edit"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Add Job Modal -->
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
            <label for="addTitle" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="addTitle" name="addTitle" placeholder="Enter the job title or position name. Be specific." aria-label="Job Title">
          </div>
          <div class="mb-3">
            <label for="addDescription" class="form-label">Job Description</label>
            <textarea class="form-control" id="addDescription" name="addDescription" rows="4" placeholder="Enter a detailed job description including responsibilities, required qualifications, and any other important details. Be clear and concise to attract potential candidates." aria-label="Job Description"></textarea>
          </div>
          <div class="mb-3">
            <label for="addOverview" class="form-label">Job Overview</label>
            <textarea class="form-control" id="addOverview" name="addOverview" rows="4" placeholder="Provide a brief job overview to give potential applicants a quick idea about the role. Highlight key points to attract their attention." aria-label="Job Overview"></textarea>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="jobType" class="form-label">Job Type</label>
                <select class="form-control" id="jobType" name="addJobType">
                  <option value="">Select Job type</option>
                  <option value="Full-Time">Full-Time</option>
                  <option value="Part-Time">Part-Time</option>
                  <option value="Temporary/Contract">Temporary/Contract</option>
                  <option value="Internship/OJT">Internship/OJT</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="addVacancies" class="form-label">No. of Vacancies</label>
                <input type="number" class="form-control" id="addVacancies" name="addVacancies" placeholder="Enter # of job vacancies" aria-label="No. of Vacancies">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="experience" class="form-label">Qualifications</label>
                <select class="form-control" id="experience" name="addExperience">
                  <option value="">Select Qualification</option>
                  <option value="High School Graduate">High School Graduate</option>
                  <option value="SHS Graduate">SHS Graduate</option>
                  <option value="Bachelor's Degree">Bachelor's Degree</option>
                  <option value="Post-Graduate Degree">Post-Graduate Degree</option>
                  <option value="Vocational or Technical Certificate/Diploma">Vocational or Technical Certificate/Diploma</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="jobLevel" class="form-label">Job Level</label>
                <select class="form-control" id="jobLevel" name="addJobLevel">
                  <option value="">Select Job Level</option>
                  <option value="Entry-Level">Entry-Level</option>
                  <option value="Junior">Junior</option>
                  <option value="Mid-Level">Mid-Level</option>
                  <option value="Senior">Senior</option>
                  <option value="Lead">Lead</option>
                  <option value="Manager">Manager</option>  
                  <option value="Director">Director</option>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="addLocation" class="form-label">Location</label>
            <input type="text" class="form-control" id="addLocation" name="addLocation" placeholder="Enter the job location" aria-label="Job Location">
          </div>
          <div class="mb-3">
            <label for="addAdditionalInfo" class="form-label">Additional Information</label>
            <input type="text" class="form-control" id="addAdditionalInfo" name="addAdditionalInfo" placeholder="Enter any additional information about the job" aria-label="Additional Information">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="addButton" name="add"><i class="fas fa-plus"></i> Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  