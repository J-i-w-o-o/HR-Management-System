<style>
  .container {
    color: #12294a;
  }
</style>
<title>Job Application</title>
<?php include 'C:\xampp\htdocs\HR-Management-System\assets\css\job-application.css'; ?>
<div id="main">
  <link rel="stylesheet" href="../assets/css/node_modules/dashboard.css">
  <div class="container-fluid px-4" id=main>
    <section id="hero" class="pt-5 mt-8 align-items-center">
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header text-white"> Job Listing </div>
            <div class="card-body bg-#ec5b33 text-dark" style="font-size: 2rem;"> 1million</div>
            <div class="card-footer border-dark d-flex align-items-center justify-content-between">
              <a class="small text-dark stretched-link" href="index.php?job-listing">View Details</a>
              <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header bg-#ec5b33 text-white"> No. of Pending Applicants </div>
            <div class="card-body text-dark" style="font-size: 2rem;"> 10000 </div>
            <div class="card-footer border-dark d-flex align-items-center justify-content-between">
              <a class="small text-dark stretched-link" href="index.php?job-application">View Details</a>
              <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>



        <div class="col-xl-3 col-md-6">
          <div class="container">
            <div class="display-date">
              <span id="day">day</span>,
              <span id="daynum">00</span>
              <span id="month">month</span>
              <span id="year">0000</span>
            </div>
            <div class="display-time"></div>
          </div>
        </div>



        <script>
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
      </div>
    </section>
  </div>
</div>