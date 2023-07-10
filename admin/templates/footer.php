
</div>
</body>
<footer>
<div class="container footer-bottom clearfix text-center">
      <div class="copyright">
        &copy; Copyright <strong><span>Tiger's Mark Corporation</span></strong>. All Rights Reserved
      </div>
    </div>
</footer> 
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.getElementById("container").style.transform = "translateX(-250px)";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      document.body.style.boxShadow = "solid";

      
    }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("container").style.transform = "translateX(0)";
    document.body.style.backgroundColor = "white";
  }
  
  
  const displayTime = document.querySelector(".display-time");

// Time
function showTime() {
  let time = new Date();
  let hours = time.getHours();
  let period = hours >= 12 ? "PM" : "AM";
  hours = hours % 12 || 12;
  let minutes = time.getMinutes();
  let seconds = time.getSeconds();
  displayTime.innerText = `${hours}:${minutes
.toString()
.padStart(2, "0")}:${seconds.toString().padStart(2, "0")} ${period}`;
  setTimeout(showTime, 1000);
}
showTime();
// Date
function updateDate() {
  let today = new Date();

  // return number
  let dayName = today.getDay(),
    dayNum = today.getDate(),
    month = today.getMonth(),
    year = today.getFullYear();

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const dayWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  // value -> ID of the html element
  const IDCollection = ["day", "daynum", "month", "year"];
  // return value array with number as a index
  const val = [dayWeek[dayName], dayNum, months[month], year];
  for (let i = 0; i < IDCollection.length; i++) {
    document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
  }
}
updateDate();
  
</script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
<script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>



</html>

