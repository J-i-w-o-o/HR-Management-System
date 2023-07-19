<title>Attendance</title>


<link rel="stylesheet" href="../assets/css/attendance.css">
<div id="main">
    <div class="d-flex justify-content-center mt-3">
    <img src="../assets/images/jibble.png" alt="Logo" width="120" height="40">
    </div>
    <section id="hero" class=" align-items-center">
    <div class="d-flex justify-content-between align-items-center mx-2">
    <h2 class="mt-2 ms-3"> OJT ATTENDANCE</h2>
      <div class="d-flex">
          <div class="mx-2 my-3" >
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
            <input type="text" id="searchInput" class="form-control form-control-sm me-2" placeholder="Search for a job">
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
              <table>
                <div>
                  <tr>
                    <th>Name</th>
                    <th>Total Attendance </th>
                  </tr>
                </div>
              
              </table>
            </div>
          </div>
        </table>
      </div>
    </div>
  </section>
</div>
<script>
const dropdownBtn = document.getElementById("btn");
const dropdownMenu = document.getElementById("dropdown");
const toggleArrow = document.getElementById("arrow");

// Toggle dropdown function
const toggleDropdown = function () {
  dropdownMenu.classList.toggle("show");
  toggleArrow.classList.toggle("arrow");
};

// Toggle dropdown open/close when dropdown button is clicked
dropdownBtn.addEventListener("click", function (e) {
  e.stopPropagation();
  toggleDropdown();
});

// Close dropdown when dom element is clicked
document.documentElement.addEventListener("click", function () {
  if (dropdownMenu.classList.contains("show")) {
    toggleDropdown();
  }
});
</script>