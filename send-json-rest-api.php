<?php

//API Url
// Original sent to People controller THIS WORKS
$url = 'http://localhost:8888/dreygrade/api/example/usercreate';
 
//Initiate cURL.
$ch = curl_init($url);

$jsonData = $_POST;
 
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
 
//API key
$apiKey = 'CODEX@123';

//Auth credentials
$username = "admin";
$password = "1234";


//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
 
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 
//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
//Execute the request
$result = curl_exec($ch);

curl_close($ch);

?>