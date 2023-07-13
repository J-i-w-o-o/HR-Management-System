<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the delete button was clicked
    if (isset($_POST['delete'])) {
        // Get the submitted form data
        $title = $_POST['title'];

        // Read the existing job listings from the JSON file
        $file = '../assets/data/careers.json';
        $jobsData = json_decode(file_get_contents($file), true);

        // Find the job listing with the matching title
        $index = -1;
        foreach ($jobsData as $key => $job) {
            if ($job['title'] === $title) {
                $index = $key;
                break;
            }
        }

        if ($index !== -1) {
            // Remove the job listing from the array
            array_splice($jobsData, $index, 1);

            // Save the updated job listings to the JSON file
            file_put_contents($file, json_encode($jobsData, JSON_PRETTY_PRINT));

            // Redirect back to the page
            echo '<script>window.location.href = "../admin/index.php?job-listing";</script>';

            exit();
        }
    } elseif (isset($_POST['apply'])) {
    $title = $_POST['title'];
    $lastUpdate= $_POST['lastUpdate'];
    $overview = $_POST['overview'];
    $jobType = $_POST['jobType'];
    $vacancies = $_POST['vacancies'];
    $experience = $_POST['experience'];
    $jobLevel = $_POST['jobLevel'];
    $location = $_POST['location'];
    $additionalInfo = $_POST['additionalInfo'];
    $description = $_POST['description'];

    // Read the existing job listings from the JSON file
    $file = '../assets/data/careers.json';
    $jobsData = json_decode(file_get_contents($file), true);
  
    // Find the job listing with the matching title
    $index = -1;
    foreach ($jobsData as $key => $job) {
      if ($job['title'] === $title) {
        $index = $key;
        break;
      }
    }
  
    if ($index !== -1) {
      // Update the job listing with the new values
      $jobsData[$index]['overview'] = $overview;
      $jobsData[$index]['jobType'] = $jobType;
      $jobsData[$index]['vacancies'] = $vacancies;
      $jobsData[$index]['postedAgo'] = $lastUpdate;
      $jobsData[$index]['experience'] = $experience;
      $jobsData[$index]['jobLevel'] = $jobLevel;
      $jobsData[$index]['location'] = $location;
      $jobsData[$index]['additionalInfo'] = $additionalInfo;
      $jobsData[$index]['description'] = $description;
  
      // Save the updated job listings to the JSON file
      file_put_contents($file, json_encode($jobsData, JSON_PRETTY_PRINT));
  
      // Redirect back to the page
      echo '<script>window.location.href = "../admin/index.php?job-listing";</script>';

      exit();
    }
} elseif (isset($_POST['add'])) {
    // Get the submitted form data
    $addTitle = $_POST['addTitle'];
    $addlastUpdate= $_POST['addlastUpdate'];
    $addOverview = $_POST['addOverview'];
    $addJobType = $_POST['addJobType'];
    $addVacancies = $_POST['addVacancies'];
    $addExperience = $_POST['addExperience'];
    $addJobLevel = $_POST['addJobLevel'];
    $addLocation = $_POST['addLocation'];
    $addAdditionalInfo = $_POST['addAdditionalInfo'];
    $addDescription = $_POST['addDescription'];

    // Read the existing job listings from the JSON file
    $file = '../assets/data/careers.json';
    $jobsData = json_decode(file_get_contents($file), true);

    // Create a new job listing array
    $newJob = array(
        'title' => $addTitle,
        'overview' => $addOverview,
        'jobType' => $addJobType,
        'postedAgo' => $addlastUpdate,
        'vacancies' => $addVacancies,
        'experience' => $addExperience,
        'jobLevel' => $addJobLevel,
        'location' => $addLocation,
        'additionalInfo' => $addAdditionalInfo,
        'description' => $addDescription
    );

    // Add the new job listing to the existing job listings array
    $jobsData[] = $newJob;

    // Save the updated job listings to the JSON file
    file_put_contents($file, json_encode($jobsData, JSON_PRETTY_PRINT));

    // Redirect back to the page
    echo '<script>window.location.href = "../admin/index.php?job-listing";</script>';

    exit();
} else {
    echo '<script>window.location.href = "../admin/index.php?job-listing";</script>';
    exit();
}
}
?>