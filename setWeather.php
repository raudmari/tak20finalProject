<?php
include_once 'models/weather.php';
include_once 'helpers/common.php';

if (isset($_POST['day'])) {
    $day = $_POST['day'];
}
if (isset($_POST['month'])) {
    $month = $_POST['month'];
}
if (isset($_POST['year'])) {
    $year = $_POST['year'];
}
show($day);


$weather = new Weather();

//$resultWest = $weather->getWeastWeatherInfo($year, $month, $day);

//show($resultWest);