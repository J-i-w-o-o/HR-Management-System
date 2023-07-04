<html lang = "en">  
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
       <li><a href="index.php?dashboard" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD">Dashboard</a></li>    
       <li><a href="index.php?job-listing" data-toggle="tooltip" data-placement="bottom" title="JOB LISTING"> Job Listing</a> </li>  
       <li class="dropdown">  
       <a href="#works" class="dropdown-toggle?" data-toggle="dropdown"> Works </a>  
     <ul class="dropdown-menu animated fadeInLeft" role="menu">  
      <div class="dropdown-header">Dropdown heading</div>  
      <li><a href="#pictures">Pictures</a></li>  
      <li><a href="#videos">Videeos</a></li>  
      <li><a href="#books">Books</a></li>  
      <li><a href="#art">Art</a></li>  
      <li><a href="#awards">Awards</a></li>  
      </ul>  
      </li>  
      <li><a href="#settings">Settings</a></li>  
      
      </ul>  
  </nav>  
         
        <div id="page-content-wrapper">  
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">  
                <span class="hamb-top"></span>  
                <span class="hamb-middle"></span>  
                <span class="hamb-bottom"></span>  
            </button>  
            <!-- <div class="container">  
                <div class="row">  
                    <div class="col-lg-8 col-lg-offset-2">  
                        <h1> Bootstrap4 Sidebar Navigation Example </h1>  
                     </div>   -->
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
        <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav> --> 




