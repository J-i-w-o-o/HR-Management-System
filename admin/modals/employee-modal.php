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