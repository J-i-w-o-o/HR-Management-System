
fetch('./assets/data/careers.json')
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
        cardContent.className = 'card-body mx-2';

        cardContent.innerHTML = `
          <h5 class="card-header mb-2 text-center" style="background-color: #fbdad0;">${job.title}</h5>
          <h6 class="card-title text-muted">Job type: ${job.jobType}</h6>
          <p class="card-text ">${job.description}</p>
        `;

        const cardFooter = document.createElement('div');
        cardFooter.className = 'card-footer text-muted d-flex justify-content-between align-items-center';

        const postedAgoFormatted = formatPostedAgo(job.postedAgo);

        cardFooter.innerHTML = `
    <div>${postedAgoFormatted}</div>
    <button type="button" class="btncareer btn  btn rounded-pill" style="background-color: #ee6944; color:white; font-size:15px;" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="showJobDetails('${job.title}', '${job.overview}', '${job.jobType}', '${job.vacancies}', '${job.experience}', '${job.jobLevel}', '${job.location}', '${job.additionalInfo}')">APPLY NOW</button>
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

function showJobDetails(title, overview, jobType, vacancies, experience, jobLevel, location, additionalInfo) {
  const modalTitle = document.getElementById('jobLabel');
  const overviewElement = document.getElementById('overview');
  const jobTypeElement = document.getElementById('jobType');
  const vacanciesElement = document.getElementById('vacancies');
  const experienceElement = document.getElementById('experience');
  const jobLevelElement = document.getElementById('jobLevel');
  const locationElement = document.getElementById('location');
  const additionalInfoElement = document.getElementById('additionalInfo');
  const titleElement = document.getElementById('titleInput');

  modalTitle.textContent = 'Job details - ' + title;
  overviewElement.textContent = overview ? overview : 'No information provided';
  jobTypeElement.textContent = jobType ? jobType : 'No information provided';
  vacanciesElement.textContent = vacancies ? vacancies : 'No information provided';
  experienceElement.textContent = experience ? experience : 'No information provided';
  jobLevelElement.textContent = jobLevel ? jobLevel : 'No information provided';
  locationElement.textContent = location ? location : 'No information provided';
  additionalInfoElement.textContent = additionalInfo ? additionalInfo : 'No information provided';
  titleElement.value = title;
}

function formatPostedAgo(postedAgo) {
  const postedDate = new Date(postedAgo);
  const currentTimestamp = new Date();
  const elapsedMilliseconds = currentTimestamp - postedDate;
  const elapsedSeconds = Math.floor(elapsedMilliseconds / 1000);
  const elapsedMinutes = Math.floor(elapsedMilliseconds / 60000);
  const elapsedHours = Math.floor(elapsedMilliseconds / 3600000);
  const elapsedDays = Math.floor(elapsedMilliseconds / 86400000);

  let postedAgoFormatted;

  if (elapsedSeconds < 60) {
    postedAgoFormatted = elapsedSeconds + " seconds ago";
  } else if (elapsedMinutes < 60) {
    postedAgoFormatted = elapsedMinutes + " minutes ago";
  } else if (elapsedHours < 24) {
    postedAgoFormatted = elapsedHours + " hours ago";
  } else {
    postedAgoFormatted = elapsedDays + " days ago";
  }

  return postedAgoFormatted;
}
