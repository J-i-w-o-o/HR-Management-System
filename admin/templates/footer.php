
<footer>
<div class="container footer-bottom clearfix">
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
  var dropdownToggle = document.querySelector('.dropdown-toggle');
  var dropdownContent = document.querySelector('.dropdown-content');

  dropdownToggle.addEventListener('click', function(event) {
    event.preventDefault();
    dropdownContent.classList.toggle('show');
  });

  dropdownContent.addEventListener('click', function(event) {
    event.stopPropagation();
  });

  window.addEventListener('click', function() {
    dropdownContent.classList.remove('show');
  });
  
</script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>

