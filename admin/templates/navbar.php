<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="../admin/dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span></span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="../../resource/images/img.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Sandwitch Group</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../admin/dashboard.php">Dashboard</a></li>
                            <!--<li><a href="../admin/dashboard2.php">Dashboard2</a></li>-->
                            <!--<li><a href="../admin/dashboard3.php">Dashboard3</a></li>-->
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-edit"></i> Admin <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../employee/createEmployee.php">Create Employee</a></li>
                            <li><a href="../admin/liveEventHistory.php">Employee History</a></li>

                            <li><a href="../admin/sendLiveEvent.php">Live Event</a></li>
                            <li><a href="../admin/liveEventHistory.php">Live Event History</a></li>
                            <li><a href="../admin/sendNotice.php">Notice</a></li>
                            <li><a href="../admin/noticeHistory.php">Notice History</a></li>
                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-clone"></i>Notice <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../noticeBoard/noticeBoard.php">Notice Board</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-laptop"></i> Live Event <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../liveEvent/liveEvent.php">View Live Event</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../src/store/Logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="../../resource/images/img.png" alt="">Sandwitch Group
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li><a href="../../src/store/Logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-calendar"></i>
                        <span class="badge bg-green"><?=$_SESSION["event"]?></span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                        <?php
                           foreach ($_SESSION["events"] as $event){
                        ?>
                        <li>
                            <a>
                                <span class="image"><img src="../../resource/images/img.png" alt="Profile Image" /></span>
                                <span>
                                  <span>Sandwitch Group</span>
                                  <span class="time"><?=$event['event_time']?></span>
                                </span>
                                <span class="message">
                                  <?=$event['subject']?>
                               </span>
                            </a>
                        </li>
                        <?php
                           }
                        ?>
                        <li>
                            <div class="text-center">
                                <a href="../liveEvent/liveEvent.php">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
<!-- <html lang = "en">  
   <head>  
      <meta charset = "utf-8">  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">        
  <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<style>  
body {  
    position: relative;  
    overflow-x: hidden;  
    background-color: white;  
}  
body,  
html { height: 100%;}  
.nav .open > a,   
.nav .open > a:hover,   
.nav .open > a:focus {background-color: transparent;}  
#wrapper {  
    padding-left: 0;  
    -webkit-transition: all 0.5s ease;  
    -moz-transition: all 0.5s ease;  
    -o-transition: all 0.5s ease;  
    transition: all 0.5s ease;  
}  
  
#wrapper.toggled {  
    padding-left: 220px;  
}  
  
#sidebar-wrapper {  
    z-index: 1000;  
    left: 220px;  
    width: 0;  
    height: 100%;  
    margin-left: -220px;  
    overflow-y: auto;  
    overflow-x: hidden;  
    background: transparent;
    -webkit-transition: all 0.5s ease;  
    -moz-transition: all 0.5s ease;  
    -o-transition: all 0.5s ease;  
    transition: all 0.5s ease;  
}  
  
#sidebar-wrapper::-webkit-scrollbar {  
  display: none;  
}  
  
#wrapper.toggled #sidebar-wrapper {  
    width: 220px;  
}  
  
#page-content-wrapper {  
    width: 100%;  
    padding-top: 70px;  
}  
  
#wrapper.toggled #page-content-wrapper {  
    position: absolute;  
    margin-right: -220px;  
}  
.navbar {  
  padding: 0;  
}  
  
.sidebar-nav {  
    position: absolute;  
    top: 0;  
    width: 220px;  
    margin: 0;  
    padding: 0;  
    list-style: none;  
    background-color: transparent;
}  
  
.sidebar-nav li {  
    position: relative;   
    line-height: 20px;  
    display: inline-block;  
    width: 100%;  
}  
  
.sidebar-nav li:before {  
    content: '';  
    position: absolute;  
    top: 0;  
    left: 0;  
    z-index: -1;  
    height: 100%;  
    width: 3px;  
    background-color:  #ec5b33;  
    -webkit-transition: width .2s ease-in;  
      -moz-transition:  width .2s ease-in;  
       -ms-transition:  width .2s ease-in;  
            transition: width .2s ease-in;  
  
}  
.sidebar-nav li:first-child a {  
    color:  black;  
    background-color: #ec5b33;  
}  
.sidebar-nav li:nth-child(5n+1):before {  
    background-color: #ec5b33;     
}  
.sidebar-nav li:nth-child(5n+2):before {  
    background-color: #ec5b33;     
}  
.sidebar-nav li:nth-child(5n+3):before {  
    background-color: #ec5b33;     
}  
.sidebar-nav li:nth-child(5n+4):before {  
    background-color: #ec5b33;     
}  
.sidebar-nav li:nth-child(5n+5):before {  
    background-color: #ec5b33;     
}  
  
.sidebar-nav li:hover:before,  
.sidebar-nav li.open:hover:before {  
    width: 100%;  
    -webkit-transition: width .2s ease-in;  
      -moz-transition:  width .2s ease-in;  
       -ms-transition:  width .2s ease-in;  
            transition: width .2s ease-in;  
  
}  
.sidebar-nav li a {  
    display: block;  
    color: black;  
    text-decoration: none;  
    padding: 10px 15px 10px 30px;      
}  
.sidebar-nav li a:hover,  
.sidebar-nav li a:active,  
.sidebar-nav li a:focus,  
.sidebar-nav li.open a:hover,  
.sidebar-nav li.open a:active,  
.sidebar-nav li.open a:focus{  
    color: #fff;  
    text-decoration: none;  
    background-color: transparent;  
}  
.sidebar-header {  
    text-align: center;  
    font-size: 20px;  
    position: relative;  
    width: 100%;  
    display: inline-block;  
    background-color: transparent;
}  
.sidebar-brand {  
    height: 65px;  
    position: relative;  
    background: #ec5b33;  
    background: transparent;  
   padding-top: 1em;  
   background-color: transparent;
}  
.sidebar-brand a {  
    color: #ddd;  
}  
.sidebar-brand a:hover {  
    color: #fff;  
    text-decoration: none;  
}  
.dropdown-header {  
    text-align: center;  
    font-size: 1em;  
    color: #ddd;  
    background:#212531;  
    background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);  
}  
.sidebar-nav .dropdown-menu {  
    position: relative;  
    width: 100%;  
    padding: 0;  
    margin: 0;  
    border-radius: 0;  
    border: none;  
    background-color: #222;  
    box-shadow: none;  
}  
.dropdown-menu.show {  
    top: 0;  
}  
.nav.sidebar-nav li a::before {  
    font-family: fontawesome;  
    content: "\f12e";  
    vertical-align: baseline;  
    display: inline-block;  
    padding-right: 5px;  
}  
a[href*="#home"]::before {  
  content: "\f015" !important;  
}  
a[href*="#about"]::before {  
  content: "\f129" !important;  
}  
a[href*="#events"]::before {  
  content: "\f073" !important;  
}  
a[href*="#events"]::before {  
  content: "\f073" !important;  
}  
a[href*="#team"]::before {  
  content: "\f0c0" !important;  
}  
a[href*="#works"]::before {  
  content: "\f0b1" !important;  
}  
  


.hamburger {  
  position: fixed;  
  top: 20px;    
  z-index: 999;  
  display: block;  
  width: 32px;  
  height: 32px;  
  margin-left: 15px;  
  background: transparent;  
  border: none;  
}  
.hamburger:hover,  
.hamburger:focus,  
.hamburger:active {  
  outline: none;  
}  
.hamburger.is-closed:before {  
  content: '';  
  display: block;  
  width: 100px;  
  font-size: 14px;  
  color: #fff;  
  line-height: 32px;  
  text-align: center;  
  opacity: 0;  
  -webkit-transform: translate3d(0,0,0);  
  -webkit-transition: all .35s ease-in-out;  
}  
.hamburger.is-closed:hover:before {  
  opacity: 1;  
  display: block;  
  -webkit-transform: translate3d(-100px,0,0);  
  -webkit-transition: all .35s ease-in-out;  
}  
  
.hamburger.is-closed .hamb-top,  
.hamburger.is-closed .hamb-middle,  
.hamburger.is-closed .hamb-bottom,  
.hamburger.is-open .hamb-top,  
.hamburger.is-open .hamb-middle,  
.hamburger.is-open .hamb-bottom {  
  position: absolute;  
  left: 0;  
  height: 4px;  
  width: 100%;  
}  
.hamburger.is-closed .hamb-top,  
.hamburger.is-closed .hamb-middle,  
.hamburger.is-closed .hamb-bottom {  
  background-color: #12294a;  
}  
.hamburger.is-closed .hamb-top {   
  top: 5px;   
  -webkit-transition: all .35s ease-in-out;  
}  
.hamburger.is-closed .hamb-middle {  
  top: 50%;  
  margin-top: -2px;  
}  
.hamburger.is-closed .hamb-bottom {  
  bottom: 5px;    
  -webkit-transition: all .35s ease-in-out;  
}  
  
.hamburger.is-closed:hover .hamb-top {  
  top: 0;  
  -webkit-transition: all .35s ease-in-out;  
}  
.hamburger.is-closed:hover .hamb-bottom {  
  bottom: 0;  
  -webkit-transition: all .35s ease-in-out;  
}  
.hamburger.is-open .hamb-top,  
.hamburger.is-open .hamb-middle,  
.hamburger.is-open .hamb-bottom {  
  background-color: #12294a;  
}  
.hamburger.is-open .hamb-top,  
.hamburger.is-open .hamb-bottom {  
  top: 50%;  
  margin-top: -2px;    
}  
.hamburger.is-open .hamb-top {   
  -webkit-transform: rotate(45deg);  
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);  
}  
.hamburger.is-open .hamb-middle { display: none; }  
.hamburger.is-open .hamb-bottom {  
  -webkit-transform: rotate(-45deg);  
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);  
}  
.hamburger.is-open:before {  
  content: '';  
  display: block;  
  width: 100px;  
  font-size: 14px;  
  color: #fff;  
  line-height: 32px;  
  text-align: center;  
  opacity: 0;  
  -webkit-transform: translate3d(0,0,0);  
  -webkit-transition: all .35s ease-in-out;  
}  
.hamburger.is-open:hover:before {  
  opacity: 1;  
  display: block;  
  -webkit-transform: translate3d(-100px,0,0);  
  -webkit-transition: all .35s ease-in-out;  
}  
.overlay {  
    position: fixed;  
    display: none;  
    width: 100%;  
    height: 100%;  
    top: 0;  
    left: 0;  
    right: 0;  
    bottom: 0;  
    background-color: transparent;  
    z-index: 1;  
}  
</style>  
<body>  
<div id="wrapper">  
   <div class="overlay"></div>  
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">  
     <ul class="nav sidebar-nav">  
       <div class="sidebar-header">  
       <div class="sidebar-brand">  
         <a href="#"> <img src="../assets/images/TMC_LOGO.png" alt="Logo" width="120" height="40"> </a> </div> </div>  
       <li><a href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom">Dashboard</a></li>    
       <li><a href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"> Job Listing</a> </li>  
       <li class="dropdown">  
       <a href="#works" class="dropdown-toggle?" data-toggle="dropdown"> Works </a>  
      </li>  
      <li><a href="#settings">Settings</a></li>  
      
      </ul>  
  </nav>  
         
        
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">  
                <span class="hamb-top"></span>  
                <span class="hamb-middle"></span>  
                <span class="hamb-bottom"></span>  
            </button> 
                </div>  
            </div>  
        </div>    
    </div>  
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"> </script>  
    <script>  
    $(document).ready(function () {  
  var trigger = $('.hamburger'),  
      overlay = $('.overlay'),  
     isClosed = false;  
    trigger.click(function () {  
      hamburger_cross();        
    });  
    function hamburger_cross() {  
      if (isClosed == true) {            
        overlay.hide();  
        trigger.removeClass('is-open');  
        trigger.addClass('is-closed');  
        isClosed = false;  
      } else {     
        overlay.show();  
        trigger.removeClass('is-closed');  
        trigger.addClass('is-open');  
        isClosed = true;  
      }  
  }  
  $('[data-toggle="offcanvas"]').click(function () {  
        $('#wrapper').toggleClass('toggled');  
  });    
});  
    </script> 
    </body>  
</html>  
  <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
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
        <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav> 



 -->
