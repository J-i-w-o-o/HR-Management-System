<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <div class="card-header">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
      <img src="../assets/images/Addicon.png" class="mb-3" width="150" height="150">
      <div class="card-body">
        <h5 class="card-title">' . $department . '</h5>
        <p class="card-text" data-id="' . $id . '"></p>
        <p class="card-text">Name: ' . $name . '</p>
        <p class="card-text">Contact: ' . $contact . '</p>
        <p class="card-text">Date Hired: ' . $dateHired . '</p>
      </div>
    </div>
  </div>
</div>



<div class="card mx-2">
  <div class="col-md-auto d-flex justify-content-end mb-4">
    <button type="button" class="btn rounded-pill edit-button justify-content-end" data-bs-toggle="modal" data-bs-target="#employeeModal" data-id="' . $id . '" data-name="' . $name . '" data-contact="' . $contact . '" data-date-hired="' . $dateHired . '"><i class="fa-solid fa-ellipsis fa-xl" style="color: #ec5b33;"></i></button>
  </div>
  <div class="card-container">
    <h5 class="card-title text-muted">' . $department . '</h5>
    <p class="card-text" data-id="' . $id . '"></p>
    <p class="card-text">Name: ' . $name . '</p>
    <p class="card-text">Contact: ' . $contact . '</p>
    <p class="card-text">Date Hired: ' . $dateHired . '</p>
  </div>
</div>