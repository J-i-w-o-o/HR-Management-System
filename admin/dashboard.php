<title>Job Application</title>
<?php include 'C:\xampp\htdocs\HR-Management-System\assets\css\job-application.css';?>
<div id="main">
<link rel="stylesheet" href="../assets/css/node_modules/dashboard.css">
<div class="container-fluid px-4" id=main>
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
                <div class="card-header bg-#ec5b33 text-white"> No. of Job Applicants </div>
                <div class="card-body text-dark" style="font-size: 2rem;"> 10000 </div>
                <div class="card-footer border-dark d-flex align-items-center justify-content-between">
                    <a class="small text-dark stretched-link" href="index.php?job-application">View Details</a>
                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
        <body onLoad="initClock()">

<div id="timedate">
  <a id="mon">January</a>
  <a id="d">1</a>,
  <a id="y">0</a><br />
  <a id="h">12</a> :
  <a id="m">00</a>
</div>
        </div>


    </div>


</div>
</div>

<script>
  // START CLOCK SCRIPT

  Number.prototype.pad = function(n) {
    for (var r = this.toString(); r.length < n; r = 0 + r);
    return r;
  };

  function updateClock() {
    var now = new Date();
    var milli = now.getMilliseconds(),
      sec = now.getSeconds(),
      min = now.getMinutes(),
      hou = now.getHours(),
      mo = now.getMonth(),
      dy = now.getDate(),
      yr = now.getFullYear();
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var tags = ["mon", "d", "y", "h", "m", "s", "mi"],
      corr = [months[mo], dy, yr, (hou % 12 || 12).pad(2), min.pad(2), sec.pad(2), milli];
    for (var i = 0; i < tags.length; i++)
      document.getElementById(tags[i]).firstChild.nodeValue = corr[i];

    // Determine the period (AM or PM)
    var period = hou >= 12 ? "PM" : "AM";
    document.getElementById("period").textContent = period;
  }

  function initClock() {
    updateClock();
    window.setInterval("updateClock()", 1);
  }

  initClock();
</script>

</script>


          
       