<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    overflow-x: hidden;
}

.navbar {
    background-color: #333;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 0 20px;
}

.hamburger {
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 20px;
    width: 30px;
}

.line {
    background-color: #fff;
    height: 4px;
    width: 100%;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    background-color: #333;
    color: #fff;
    padding-top: 20px;
    transform: translateX(-100%);
    transition: transform 0.3s ease-in-out;
    z-index: 1;
}

.sidebar.open {
    transform: translateX(0);
}

.sidebar h1 {
    text-align: center;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.sidebar li {
    padding: 8px 15px;
}

.sidebar a {
    color: #fff;
    text-decoration: none;
    display: block;
}

.sidebar a:hover {
    background-color: #555;
}

.content {
    margin-left: 250px;
    padding: 20px;
    transition: margin-left 0.3s ease-in-out;
}
.content.sidebar-open {
            margin-left: 250px;
        }

</style>
<div class="navbar">
        <div class="hamburger" onclick="toggleSidebar()">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <form class="d-flex forms">
        <input type="text" id="searchInput" class="form-control form-control-sm me-2 mx-2" placeholder="Search for a job">
        <button type="submit" class="btn btn-sm" id="searchIcon">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>

    <div id="sidebar" class="sidebar">
        
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <button class="close-btn" onclick="closeSidebar()"><i class="fas fa-times"></i></button>
    </div>

    <div class="content">
        <a href = "dashboard.php"></a>
    </div>
    <script>
      function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const content = document.querySelector('.content');

    sidebar.classList.toggle('open');
    content.classList.toggle('open');
}
function closeSidebar() {
    sidebar.classList.remove('open');
    content.classList.remove('open');
}

    
        function openSidebar() {
            document.getElementById("sidebar").style.left = "0";
            document.querySelector(".content").classList.add("sidebar-open");
        }

        function closeSidebar() {
            document.getElementById("sidebar").style.left = "-250px";
            document.querySelector(".content").classList.remove("sidebar-open");
        }
    

      </script>
 <!-- <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD"><i class="material-icons">dashboard</i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"><i class="material-icons">group</i></a> 
    </li>
        </ul>
        
        </div>
    </div>
    </nav>  -->



 
