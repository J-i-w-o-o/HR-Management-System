<title>Employee</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Add the Bootstrap JS library link -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Add your custom JavaScript function -->

<link rel="stylesheet" href="../assets/css/employee.css">
<style>
  #image-display {
    width: 200px; /* Set your desired width */
    height: 200px; /* Set your desired height */
    overflow: hidden;
  }

  #image-display img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>

<div id="main">

  <div class="d-flex justify-content-between align-items-center mx-2">
    <div>
      <h4 class="ms-3 my-3"><span id="jobCount"></span>Employees</h4>
    </div>
    <div class="d-flex">
      <form class="d-flex forms my-3">
        <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search Employee">
      </form>
    </div>
  </div>

  <div class="row ms-2 me-2">
    <div class="column">
      <div class="card">
        <div>
          <div class="float-right">
            <button class="editbtn no-border"><i class="fa-solid fa-ellipsis"></i></button>
          </div>
        </div>
          <div class="card-body">
            <div class="border border-dark" id="image-display">
              
            </div>
            <h5 class="mt-2">Position</h5>
            <p>Name</p>
            <p>Contact</p>
            <p>Date Hired</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function uploadImage() {
    const fileInput = document.getElementById('image-upload');
    const imageDisplay = document.getElementById('image-display');

    if (fileInput.files && fileInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        const img = document.createElement('img');
        img.src = e.target.result;

        // Clear previous image (if any)
        while (imageDisplay.firstChild) {
          imageDisplay.removeChild(imageDisplay.firstChild);
        }

        imageDisplay.appendChild(img);
      };

      reader.readAsDataURL(fileInput.files[0]);
    }
  }
</script>
