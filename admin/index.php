
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
} else {    
    echo "  no page"; 
}
?>
<a href="?logout">Logout</a>
<?php
include './templates/footer.php';
?>