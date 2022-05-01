<?php
include_once 'settings.php';
include_once 'helpers/common.php';

$apikey = APIKEY;
$cityId = '591475';
$lat = '58.924888';
$lon = '24.868806';
$apiUrl = 'https://api.openweathermap.org/data/2.5/weather?id=' . $cityId . '&appid=' . $apikey . '&units=metric';
$apiForcastUrl = 'api.openweathermap.org/data/2.5/onecall?lat=' . $lat . '&lon=' . $lon . '&exclude=current,minutely,alerts,hourly&appid=' . $apikey . '&units=metric';
$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

//curl_close($ch);
$data = json_decode($response);
$currentTime = time();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $apiForcastUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response2 = curl_exec($ch);

//curl_close($ch);
$data2 = json_decode($response2);
$currentTime = time();
