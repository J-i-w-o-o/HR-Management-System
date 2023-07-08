
<footer>
<div class="container footer-bottom clearfix text-center">
      <div class="copyright">
        &copy; Copyright <strong><span>Tiger's Mark Corporation</span></strong>. All Rights Reserved
      </div>
    </div>
</footer>
</body>
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.getElementById("container").style.transform = "translateX(-250px)";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      
    }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("container").style.transform = "translateX(0)";
    document.body.style.backgroundColor = "white";
  }
  function toggleDropdown() {
    var dropdownContent = document.querySelector('.dropdown-content');
    var dropdown = document.querySelector('.dropdown');
    dropdown.classList.toggle('active');
    if (dropdown.classList.contains('active')) {
      dropdownContent.style.display = 'block';
    } else {
      dropdownContent.style.display = 'none';
    }
  }
</script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</html>

