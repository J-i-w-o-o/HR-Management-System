
<title>Careers</title>
<div class="text-center">
  <h1 class="mb-3">Careers</h1>
</div>
<div class="container-fluid">
  <h4 class="text-center lead"><span id="jobCount"></span> Jobs Found</h4>
  <div id="jobsContainer" class="row"></div>
  <nav aria-label="Jobs Pagination">
    <ul id="pagination" class="pagination justify-content-center"></ul>
  </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content custom-scrollbar">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="jobLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Overview</h2>
        <p  id="overview"></p>
        <div class="row">
          <div class="col-6">
            <h4>Job type</h4>
            <p class="fs-6 px-1" id="jobType"></p>
          </div>
          <div class="col-6">
            <h4>No. of vacancies</h4>
            <p class="fs-6 px-1" id="vacancies"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <h4>Qualifications</h4>
            <p class="fs-6 px-1" id="experience"></p>
          </div>
          <div class="col-6">
            <h4>Job Level</h4>
            <p class="fs-6 px-1" id="jobLevel"></p>
          </div>
        </div>
        <h4>Location</h4>
            <p class="fs-6 px-1" id="location"></p>
        <div class="row">
          <div class="col-12">
            <h4>Additional Information</h4>
            <span id="additionalInfo" class="form-control" rows="3" disabled></span>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
<?php 
?>
<script> 
fetch('../includes/careers.json')
    .then(response => response.json())
    .then(jobsData => {
      const jobsContainer = document.getElementById('jobsContainer');
      const jobCountElement = document.getElementById('jobCount');
      const paginationContainer = document.getElementById('pagination');
      const searchInput = document.getElementById('searchInput');
      const cardsPerRow = 3;
      const cardsPerPage = 9;
      const totalPages = Math.ceil(jobsData.length / cardsPerPage);
      let currentPage = 1;

      function showJobs() {
        jobsContainer.innerHTML = '';

        const startIndex = (currentPage - 1) * cardsPerPage;
        const endIndex = startIndex + cardsPerPage;
        let filteredJobs;

        if (searchInput.value.trim() !== '') {
          const searchTerm = searchInput.value.trim().toLowerCase();
          filteredJobs = jobsData.filter(job =>
            job.title.toLowerCase().includes(searchTerm) ||
            job.description.toLowerCase().includes(searchTerm)
          );
        } else {
          filteredJobs = jobsData;
        }

        const jobsToShow = filteredJobs.slice(startIndex, endIndex);

        jobsToShow.forEach(job => {
          const colDiv = document.createElement('div');
          colDiv.className = 'col-md-4 mb-3 d-flex';

          const card = document.createElement('div');
          card.className = 'card';

          const cardContent = document.createElement('div');
          cardContent.className = 'card-body';

          cardContent.innerHTML = `
              <h5 class="card-header mb-2 text-center" style="background-color:#;">${job.title}</h5>
              <h6 class="card-title text-muted">Job type: ${job.jobType}</h6>
              <p class="card-text">${job.description}</p>
            `;

          const cardFooter = document.createElement('div');
          cardFooter.className = 'card-footer text-muted d-flex justify-content-between align-items-center';

          cardFooter.innerHTML = `
              <div>${job.postedAgo}</div>
              <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}','${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location }','${job.additionalInfo}')">Apply now</button>
            `;

          card.appendChild(cardContent);
          card.appendChild(cardFooter);
          colDiv.appendChild(card);
          jobsContainer.appendChild(colDiv);
        });

        createPagination();
      }

      function createPagination() {
        paginationContainer.innerHTML = '';

        for (let i = 1; i <= totalPages; i++) {
          const pageItem = document.createElement('li');
          pageItem.classList.add('page-item');
          if (i === currentPage) {
            pageItem.classList.add('active');
          }

          const pageLink = document.createElement('a');
          pageLink.classList.add('page-link');
          pageLink.href = '#';
          pageLink.textContent = i;
          pageLink.addEventListener('click', () => {
            currentPage = i;
            showJobs();
            window.scrollTo(0, 0); // Scroll to top after changing the page
          });

          pageItem.appendChild(pageLink);
          paginationContainer.appendChild(pageItem);
        }
      }

      searchInput.addEventListener('input', showJobs);

      showJobs();
      jobCountElement.textContent = jobsData.length;
    })
    .catch(error => {
      console.log('Error fetching careers data:', error);
    });

  function showJobDetails(title, overview, jobType, vacancies, experience, jobLevel,location,additionalInfo) {
    const modalTitle = document.getElementById('jobLabel');
    const overviewElement = document.getElementById('overview');
    const jobTypeElement = document.getElementById('jobType');
    const vacanciesElement = document.getElementById('vacancies');
    const experienceElement = document.getElementById('experience');
    const jobLevelElement = document.getElementById('jobLevel');
    const locationElement = document.getElementById('location');
    const additionalInfoElement = document.getElementById('additionalInfo');

    modalTitle.textContent = 'Job details - ' + title;
    overviewElement.textContent = overview;
    jobTypeElement.textContent = jobType;
    vacanciesElement.textContent = vacancies;
    experienceElement.textContent = experience;
    jobLevelElement.textContent = jobLevel;
    locationElement.textContent = location;
    additionalInfoElement.textContent = additionalInfo;
  }
</script>