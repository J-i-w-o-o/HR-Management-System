<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="">Edit Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p id="overview"></p>
                <form id="updateForm" method="POST" action="../includes/employeeconf.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <label for="nameInput">Name:</label>
                            <input type="text" id="nameInput" name="nameInput" class="form-control" value="">

                            <label for="contactInput">Contact:</label>
                            <input type="text" id="contactInput" name="contactInput" class="form-control" value="">
                        </div>
                        <div class="">
                            <label for="imageUpload">Select an image file (png, jpg, jpeg):</label>
                            <input type="file" id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" class="form-control-file">
                        </div>
                    </div>
                    <input type="hidden" id="employeeId" name="employeeId" value="<?php echo $employeeId; ?>">
                    <div class="float-end">
                        <button type="submit" id="btnupdateModal" class="btn btn-success px-5" name="updateEmployee">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button type="submit" id="deleteEmployeeBtn" class="btn btn-danger" name="deleteEmployee">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- modal for add employee -->
<div class="modal fade" id="addEmployee" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="">Add Employee Profile</h2>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="applicationform" enctype="multipart/form-data" method="post" action="../includes/employeeconf.php">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" id="position" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input typ e="text" name="contact" class="form-control" id="contact" required>
                            </div>
                            <div class="mb-3">
                                <label for="dateHired" class="form-label">Date Hired</label>
                                <input type="datetime-local" name="dateHired" class="form-control" id="dateHired" required>
                            </div>
                            <div class="mb-3">
                                <label for="profilePicture" class="form-label">Upload Profile Picture:</label>
                                <input type="file" name="profilePicture" class="form-control" accept=".png, .jpg, .jpeg" id="profilePicture">
                            </div>
                        </div>
                    </div>
                    <div class="float-end">
                        <button type="submit" id="btnupdateAdd" class="btn btn-success px-5" form="applicationform" name="addEmployee"><i class="fas fa-check"></i></button>
                    </div>
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
<!-- Add this script before the closing </body> tag -->
<script>
    // Function to handle file upload
    function uploadFile() {
        const form = document.getElementById("updateForm");
        const fileInput = document.getElementById("fileToUpload");

        // Check if a file has been selected
        if (fileInput.files.length === 0) {
            alert("Please select a file to upload.");
            return;
        }

        const formData = new FormData();
        formData.append("file", fileInput.files[0]);

        // Replace 'your_upload_url' with the actual URL to upload the file to the server
        const uploadUrl = "uploadedimg";

        // Make an AJAX request to upload the file
        fetch(uploadUrl, {
            method: "POST",
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            // Handle the server response, if needed
            console.log("File upload successful:", data);
        })
        .catch(error => {
            // Handle any errors that occurred during the upload
            console.error("Error uploading file:", error);
        });
    }

    // Add an event listener to the submit button
    const submitButton = document.getElementById("submit");
    submitButton.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default form submission
        uploadFile(); // Call the upload function
        // Add any other logic or form submission handling here if needed
        // e.g., form.submit();
    });
</script>
