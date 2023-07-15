<link rel="stylesheet" href="../assets/css/employee.css">

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
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit">
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
                    <div class="col-8">
                        <form id="updateForm" method="POST" action="">
                            <div class="row">
                                <p class="card-text">Name</p>
                                <input type="text" class="form-control" value="">
                                <p class="card-text">Contact</p>
                                <input type="text" class="form-control" value="">
                                <p class="card-text">Date Hired</p>
                                <input type="text" class="form-control" value="">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Upload Image" name="submit">
                            </div>
                            <input type="hidden" id="employeeId" name="employeeId" value="">
                        </form>
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
