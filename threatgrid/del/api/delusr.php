<?php

$protocol = 'https';
$host = '{HOST}'; // Input
$route = '/api/v3/users/';
$delid = $_POST["delid"]; // readline('Enter the Login ID to Delete the user: ');
$api_key = '{API_KEY}'; // Input

$usr_url = "$protocol://$host$route$delid?api_key=$api_key";

// Set up cURL
$ch = curl_init($usr_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set up DELETE request
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

//Disable SSL Verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
// Set up data for DELETE request (if applicable)
// $data = ['key1' => 'value1', 'key2' => 'value2'];
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// Send the request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
  die(curl_error($ch));
}

$responseData = json_decode($response, true);

switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
  case 200:  # OK
  case 201:
  case 202:
  case 203:
  case 204:
  case 205:
  case 206:
  case 207:
  case 208:
  case 226:
    echo "$delid Account Deleted";
    echo $responseData['error']['message'];
    break;
  default:
    echo 'Unexpected HTTP code: ', $http_code, "<br>";
    echo $responseData['error']['message'];
    echo "Prolly, $delid does not exist.";
}
// Decode the response
// $responseData = json_decode($response, true);

// Print the response data
// print_r($responseData);

// echo "$usr Account Deleted";

?>
