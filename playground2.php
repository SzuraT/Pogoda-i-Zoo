<?php

include_once 'vendor/autoload.php';

$url = 'http://api.openweathermap.org/data/2.5/weather?q=London&APPID=96cdeb166e66f9c035e9e7f8ce665ec8';
$browser = new Buzz\Browser();
$response = $browser->get($url);


$content = $response->getContent();

$weatherObject = json_decode($content);

var_dump($weatherObject->main->temp);
echo ('Temperatura wynosi: '. $weatherObject->main->temp);