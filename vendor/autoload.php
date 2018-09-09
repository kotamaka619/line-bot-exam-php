<?php
require "vendor/autoload.php";
$access_token = 'PPWU2pC//R+b3vU4/8RGUjOtOClxRV4Zbeed6Nz01HoA35EACx37QZxMrdfvCmG9XcBGVEfy7s8YA65ICUbdcSUBfoALSDAIB9mcGwskNqRgfwN9YjqbrrJlC9hAXE5CJQWG9eyQ9HsSyjymkFZw0wdB04t89/1O/w1cDnyilFU=';
$channelSecret = '5fabe948588bd828c0e3f8aefe793936';
$idPush = 'Ub245ab7225da363e003386f2d0c9474e'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
