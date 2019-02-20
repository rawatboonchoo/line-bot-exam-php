<?php
//API Url
$url = 'https=>//api.grab.com/grabid/v1/phone/otp';
 
//Initiate cURL.
$ch = curl_init($url);
 
//The JSON data.
$jsonData = array(
    'method'=> 'SMS', 
    'countryCode'=> 'TH', 
    'phoneNumber'=>'66945499432', 
    'templateID'=>'', 
    'numDigits'=>8
);
 
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
 
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
 
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 
//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type=> application/json')); 
 
//Execute the request
$result = curl_exec($ch);

print($result);
