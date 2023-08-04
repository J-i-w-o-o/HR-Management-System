<?php
// Function to make a POST request using cURL
function makePostRequest($url, $data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

// Endpoint URL
$endpoint = 'https://identity.prod.jibble.io/connect/token';

// POST data
$postData = array(
    'grant_type' => 'client_credentials',
    'client_id' => 'a3d62be0-c363-4e65-99fd-b6b6a9f3ffd3',
    'client_secret' => 'dtzIDvM1R42VxnUgPuFsDVZlHwtqSDY8jk6MppwGBUpi1679',
);

// Make the POST request
$responseJson = makePostRequest($endpoint, $postData);

// Parse the JSON response
$responseData = json_decode($responseJson, true);

// Extract access token, organization ID, and person ID
$accessToken = $responseData['access_token'];
$organizationId = $responseData['organizationId'];
$personId = $responseData['personId'];
?>
