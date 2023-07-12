<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
  <link rel="stylesheet" href="./assets/css/header.css">
  <style>

</style>

</head>
<body>
<div class="text-center">
  <h1 class="mb-3">Careers</h1>
</div>
<div class="container-fluid">
  <h4 class="text-center lead"><span id="jobCount"></span> Jobs Found</h4>
  <div id="jobsContainer" class="row">
  <div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1">asdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsadaasdsada</p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>
<div class="col-md-4 mb-3 d-flex">
  <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-header mb-2 text-center">HR ADMIN</h5>
            <h6 class="card-title text-muted">Job type: fulltime</h6>
            <p class="card-text flex-grow-1"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <div>2 days</div>
            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
        </div>
    </div>
</div>


  <script src="./assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="./assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</body>
</html>