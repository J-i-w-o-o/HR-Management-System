<title>Employee</title>
<link rel="stylesheet" href="../assets/css/employee.css">

<div id="main">

  <div class="d-flex justify-content-between align-items-center mx-2">
    <div>
      <h4 class="ms-3 my-3"><span id="jobCount"></span> Employees</h4>
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
        <div class="float-right">
          <button class="editbtn no-border"><i class="fa-solid fa-pen-to-square"></i></button>
          <div id="image-display"></div>
          <input type="file" id="image-upload" accept="image/*">
          <button onclick="uploadImage()">Upload Image</button>
        <h3>Employee 1</h3>
        <p class="position-text">Some text</p>
        <p>Some text</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="float-right">
        <button class="editbtn no-border"><i class="fa-solid fa-pen-to-square"></i></button>
        <h3>Employee 2</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="float-right">
        <button class="editbtn no-border"><i class="fa-solid fa-pen-to-square"></i></button>
        <h3>Employee 3</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="float-right">
        <button class="editbtn no-border"><i class="fa-solid fa-pen-to-square"></i></button>
        <h3>Employee 4</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>
  </div>
</div>
</div>