<?php
include '../includes/session.php';
include './templates/header.php';
include './templates/navbar.php';
?>

<?php
if ($page === 'dashboard' || $_SERVER['QUERY_STRING'] === 'dashboard') { 
    include '../admin/dashboard.php'; 
} else if ($page === 'job-listing' || $_SERVER['QUERY_STRING'] === 'job-listing') { 
    include '../admin/job-listing.php'; 
} else if ($page === 'job-application' || $_SERVER['QUERY_STRING'] === 'job-application') { 
    include '../admin/job-application.php'; 
}  else if ($page === 'job-application-accepted' || $_SERVER['QUERY_STRING'] === 'job-application-accepted') { 
    include '../admin/job-application-accepted.php'; 
}  else if ($page === 'job-application-declined' || $_SERVER['QUERY_STRING'] === 'job-application-declined') { 
    include '../admin/job-application-declined.php'; 
}  else if ($page === 'job-application-interview' || $_SERVER['QUERY_STRING'] === 'job-application-interview') { 
    include '../admin/job-application-interview.php'; 
}  else if ($page === 'employee' || $_SERVER['QUERY_STRING'] === 'employee') { 
    include '../admin/employee.php'; 
}

else {    
    include '../admin/dashboard.php';  
}
?>

<?php
include './templates/footer.php';



?> 