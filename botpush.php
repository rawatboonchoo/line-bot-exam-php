<?php
require "vendor/autoload.php";
$access_token = 'Dor2LyTSroakqqqtrx7G+N68hZiU7bFDkTL5tL1Z6Io/YfbJs3ZRjyupRlgtnSLLWy2USRiFyCrr98mdLA454RlTaTjsH5IX4YyGuBMbn8yJgXPiex0Bl+CipYIdYD1frhDokYJSdPapSFvsCasHeAdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'ccc3fb3084d5328cc3bb7470990552df';
$idPush = 'U47fc805526e21297be23ff72cb6539fe';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('https://www.lotto.ktbnetbank.com/');
$response = $bot->pushMessage('U47fc805526e21297be23ff72cb6539fe', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();





