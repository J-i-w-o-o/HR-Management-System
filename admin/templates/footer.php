</div>
</body>
<footer class="mt-3" style="background-color: transparent;">
  &copy; Copyright <strong><span>Tiger's Mark Corporation</span></strong>. All Rights Reserved
</footer>

<script>
function openNav() {
  const sidenav = document.getElementById("mySidenav");
  const main = document.getElementById("main");
  const container = document.getElementById("container");
  const body = document.body;

  sidenav.style.width = "250px";
  main.style.transition = "margin-left 0.5s"; // Add transition property
  main.style.marginLeft = "250px";
  container.style.transform = "translateX(-250px)";
  body.style.backgroundColor = "rgba(0, 0, 0, 0.4)";
  body.style.boxShadow = "solid";
}

function closeNav() {
  const sidenav = document.getElementById("mySidenav");
  const main = document.getElementById("main");
  const container = document.getElementById("container");
  const body = document.body;

  sidenav.style.width = "0";
  main.style.transition = "margin-left 0.5s"; // Add transition property
  main.style.marginLeft = "0";
  container.style.transform = "translateX(0)";
  body.style.backgroundColor = "white";
}

  const displayTime = document.querySelector(".display-time");

  function showTime() {
    const time = new Date();
    const hours = time.getHours() % 12 || 12;
    const minutes = time.getMinutes().toString().padStart(2, "0");
    const seconds = time.getSeconds().toString().padStart(2, "0");
    const period = time.getHours() >= 12 ? "PM" : "AM";

    displayTime.innerText = `${hours}:${minutes}:${seconds} ${period}`;
    setTimeout(showTime, 1000);
  }
  showTime();

  function updateDate() {
    const today = new Date();
    const dayName = today.toLocaleDateString("en-US", { weekday: "long" });
    const dayNum = today.getDate();
    const month = today.toLocaleDateString("en-US", { month: "long" });
    const year = today.getFullYear();

    document.getElementById("day").textContent = dayName;
    document.getElementById("daynum").textContent = dayNum;
    document.getElementById("month").textContent = month;
    document.getElementById("year").textContent = year;
  }
  updateDate();

  // function redirectToPage(url) {
  //   window.location.href = url; 
  // }
</script>

    

<script>
  // Update the job count
var jobCount = document.getElementById('jobCount');
jobCount.textContent = '<?php echo $employeeCount; ?>';

    // Get the modal element
    var employeeModal = document.getElementById('employeeModal');

    // Attach a click event listener to each edit button
    var editButtons = document.querySelectorAll('.edit-button');
    editButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        var id = button.getAttribute('data-id');
        var name = button.getAttribute('data-name');
        var contact = button.getAttribute('data-contact');
        var dateHired = button.getAttribute('data-date-hired');

        // Update the modal content
        var jobLabel = employeeModal.querySelector('#jobLabel');
        jobLabel.textContent = 'Edit Profile';

        var overview = employeeModal.querySelector('#overview');
        overview.textContent = '';

        var modalBody = employeeModal.querySelector('.modal-body');
        var rows = modalBody.querySelectorAll('.col-6 p.card-text');
        rows[0].textContent = 'Name: ' + name;
        rows[1].textContent = 'Contact: ' + contact;
        rows[2].textContent = 'Date Hired: ' + dateHired;

        // Set the form values
        var nameInput = document.getElementById('nameInput');
        var contactInput = document.getElementById('contactInput');
        var dateHiredInput = document.getElementById('dateHiredInput');
        var employeeIdInput = document.getElementById('employeeId');

        nameInput.value = name;
        contactInput.value = contact;
        dateHiredInput.value = dateHired;
        employeeIdInput.value = id;
      });
    });

    // Submit the update form in the employeeModal
    var btnUpdateModal = document.getElementById('btnupdateModal');
    btnUpdateModal.addEventListener('click', function() {
      document.getElementById('updateForm').submit();
    });
  </script>

<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="../assets/css/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/js/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>


</html>