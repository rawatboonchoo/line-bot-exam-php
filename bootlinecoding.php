<?php // callback.php
require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = 'pdkYcKlk2BBJzV1+djxR8NgLdLmhJH5IhW3pkGXT8YccwLe0gXo2MiSvDUgQBg5TV3SR41c/HZaGIY6Kbu53XL1Dxjd8sPbkRmtd+9SeG2YTWtSZ+VJqBVoWrcdTzihjKSlg3fwXsJ2EI+BhzeSq2QdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['source']['userId'];
			//$text_txt = 'Hello bot line';	
   			$text_txt = $event['message']['text'];
			$url = 'https://www.lotto.ktbnetbank.com/';
			// Get replyToken
			$replyToken = $event['replyToken'];
			// Build message to reply back
			  $messages = [
					    'type' => 'text',
					    'text' => $text
	
					];
			$lotto = [
					    'type' => 'text',
					    'text' => $url
	
					];
			 $messages_txt = [
					    'type' => 'text',
					    'text' => $text_txt
	
					];
			 $messages_sticker = [
					    'type' => 'sticker',
					    'packageId' => '1',
					    'stickerId' => '1'
	
					];
			$messages_location = [
					    'id' => '325708',
					    'type' => 'location',
					    'title' => 'my location',
					    'address' => '〒150-0002 東京都渋谷区渋谷２丁目２１−１',
					    'latitude' => 35.65910807942215,
					    'longitude' => 139.70372892916203
	
					];
			
			
			
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages,$messages_txt,$messages_sticker,$messages_location,$lotto],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
			
		}
	}
}
