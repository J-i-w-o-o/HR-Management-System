<title>Attendance</title>
<link rel="stylesheet" href="../assets/css/attendance.css">
<div id="main">
  <div class="d-flex justify-content-center mt-3">
    <img src="../assets/images/jibble.png" alt="Logo" width="120" height="40">
  </div>
  <section id="hero" class=" align-items-center">
    <div class="d-flex justify-content-between align-items-center mx-2">
      <h2 class="mt-2 ms-3">Monthly Attendance Report</h2>
      <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;MONTH OF JULY</span>
      <div class="d-flex">

        <div id="preloader">
          <div id="loader"></div>
        </div>
        
        <button class="btn mx-2 my-3" id="refreshButton"><i class="fa-solid fa-arrows-rotate"></i></button>
        <div class="mx-2 my-3">
          <div class="container">
            <button class="btn" id="btn">
              ATTENDANCE
              <i class="bx bx-chevron-down" id="arrow"></i>
            </button>

            <div class="dropdown" id="dropdown">
              <a href="index.php?attendance">
                <i class="bx bx-user-check "></i>
                EMPLOYEES
              </a>
              <a href="index.php?ojt-attendance">
                <i class="bx bx-user-check "></i>
                OJT
              </a>
            </div>
          </div>
        </div>
        <form class="d-flex forms my-3">
          <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search User">
          <button type="submit" class="btn btn-sm" id="searchIcon">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>
    </div>
    <div id="table-scroll" class="table-scroll">
      <div class="table-wrap">
        <table class="main-table">
          <div id="tableres">

            <div id="tableres" style="overflow-x:auto;">
              <table id="attendanceTable">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Total Attendance</th>
                  </tr>
                </thead>
                <tbody id="attendanceData">
                  <!-- Data will be populated dynamically -->
                </tbody>
              </table>
            </div>
          </div>
        </table>
      </div>
    </div>
  </section>
</div>
<!-- ... (HTML code remains unchanged) ... -->

<script>
  const dropdownBtn = document.getElementById("btn");
  const dropdownMenu = document.getElementById("dropdown");
  const toggleArrow = document.getElementById("arrow");

  // Toggle dropdown function
  const toggleDropdown = function() {
    dropdownMenu.classList.toggle("show");
    toggleArrow.classList.toggle("arrow");
  };

  // Toggle dropdown open/close when dropdown button is clicked
  dropdownBtn.addEventListener("click", function(e) {
    e.stopPropagation();
    toggleDropdown();
  });

  // Close dropdown when dom element is clicked
  document.documentElement.addEventListener("click", function() {
    if (dropdownMenu.classList.contains("show")) {
      toggleDropdown();
    }
  });
  function showPreloader() {
  const preloader = document.getElementById('preloader');
  preloader.style.display = 'flex';
}

// Function to hide the preloader
function hidePreloader() {
  const preloader = document.getElementById('preloader');
  preloader.style.display = 'none';
}

  async function fetchAttendanceData() {
    try {
      const response = await fetch('../assets/js/attendance_data.json');
      const data = await response.json();
      console.log('Attendance Data:', data);

      const attendanceData = document.getElementById('attendanceData');
      attendanceData.innerHTML = ''; // Clear the table data

      data.forEach(item => {
        const row = document.createElement('tr');
        const fullNameCell = document.createElement('td');
        const totalAttendanceCell = document.createElement('td');

        fullNameCell.textContent = item.full_name;
        totalAttendanceCell.textContent = item.total_attendance;

        row.appendChild(fullNameCell);
        row.appendChild(totalAttendanceCell);
        attendanceData.appendChild(row);
      });
    } catch (error) {
      console.error('Error fetching attendance data:', error);
    }
  }

  // Function to refresh attendance data
  async function refreshAttendanceData() {
    try {
      const response = await fetch('../includes/attendanceconf.php', {
        method: 'GET'
      });
      const data = await response.json();
      console.log('Refreshed Data:', data);
      // Call the fetchAttendanceData function to update the table
      fetchAttendanceData();
    } catch (error) {
      console.error('Error refreshing attendance data:', error);
    }
  }

  // Attach the refreshAttendanceData function to the "Refresh" button click event
  document.getElementById('refreshButton').addEventListener('click', function() {
    refreshAttendanceData();
  });

  // Call the fetchAttendanceData function on page load to initially populate the table
  fetchAttendanceData();
</script>