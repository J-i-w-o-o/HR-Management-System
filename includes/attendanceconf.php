<?php

function convertDuration($duration) {
  // Extracting the numeric values from the duration string
  preg_match('/P(\d+)DT(\d+)H(\d+)M/', $duration, $matches);
  $days = $matches[1] ?? 0;
  $hours = $matches[2] ?? 0;
  $minutes = $matches[3] ?? 0;

  // Calculating the total duration in minutes
  $totalMinutes = ($days * 24 * 60) + ($hours * 60) + $minutes;

  // Converting minutes to hours and minutes
  $hours = floor($totalMinutes / 60);
  $minutes = $totalMinutes % 60;

  // Constructing the duration string
  $durationString = sprintf("%02d:%02d", $hours, $minutes);

  // Adding the word "hours" at the end
  $durationString .= " hours";

  return $durationString;
}

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => 'https://identity.prod.jibble.io/connect/token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'grant_type=client_credentials&client_id=57412860-41ed-49c7-be79-de879dd1f923&client_secret=hunQZ671YRAehnHEfZvCfwWQp3ZPBowVNdMPxCphad0emu5J',
  CURLOPT_HTTPHEADER => [
    'Accept: application/json',
    'Content-Type: application/x-www-form-urlencoded'
  ],
]);

$response = curl_exec($curl);
curl_close($curl);

// Decode the JSON response to a PHP array
$token = json_decode($response, true);

// Check if the JSON decoding was successful
if ($token === null) {
  $output = "Error decoding JSON response: " . json_last_error_msg();
} else {
  $access_token = $token['access_token'];

  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => 'https://time-attendance.prod.jibble.io/v1/Timesheets?$count=true&$expand=person&$orderby=person/fullName%20asc&$skip=0&$top=50&date=2023-06-01&period=Month&$filter=total%20ne%20duration\'PT0H\'',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => [
      'Accept: application/json',
      'Authorization: Bearer ' . $access_token,
      'Content-Type: application/x-www-form-urlencoded'
    ],
  ]);

  $AttendanceList = curl_exec($curl);
  curl_close($curl);

  // JSON decoding and error checking
  $list = json_decode($AttendanceList, true);
  if ($list === null) {
    $output = "Error decoding JSON response: " . json_last_error_msg();
  } else {
    // Check if the 'value' key exists and is an array
    if (isset($list['value']) && is_array($list['value'])) {
      // Map the 'value' array and extract relevant data using arrow functions (PHP 7.4+)
      $data = array_map(fn($attendance) => [
        'person_id' => $attendance['person']['id'] ?? '',
        'full_name' => $attendance['person']['fullName'] ?? '',
        'total_attendance' => convertDuration($attendance['total'] ?? ''),
      ], $list['value']);      

      // Optional: Delay between iterations using usleep (microseconds)
      usleep(1000000); // Delay for 1 second (1000000 microseconds)
    } else {
      $output = "No attendance data found.";
    }
  }
}

// Save the data into a JSON file if it exists
if (isset($data)) {
  // Save the data into a JSON file named "attendance_data.json"
  $jsonFilePath = '../assets/js/attendance_data.json';
  $jsonData = json_encode($data, JSON_PRETTY_PRINT);

  if (file_put_contents($jsonFilePath, $jsonData)) {
    // Return the updated attendance data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
  } else {
    // Return an error message as JSON
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Error saving attendance data into "attendance_data.json".']);
  }
} else {
  // Return an error message as JSON
  header('Content-Type: application/json');
  echo json_encode(['error' => $output]);
}
?>
