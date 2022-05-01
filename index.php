<?php
include_once 'templates/header.php';
include_once 'helpers/common.php';
include_once 'models/weather.php';
include_once 'controllers/weathers.php';

$weather = new Weather;

$weatherEast = $weather->getLastWeatherDataEast();
$weatherWest = $weather->getLastWeatherDataWest();
//show($response);
$sunrise = ($data->sys->sunrise + $data->timezone);
$sunset = ($data->sys->sunset + $data->timezone);
?>


<div class="container">
    <h1 class="title is-4 has-text-centered mb-6">viimati mõõdetud: <?= dateToEst($weatherEast[0]->added) ?> </h1>
    <h2 class="title is-5 has-text-centered">
        <span>
            <i class="fas fa-temperature-high"></i> Temperatuur läänes: <?= round($weatherWest[0]->celsius, 1) ?> ℃
        </span>
    </h2>
    <h2 class="title is-5 has-text-centered">
        <span>
            <i class="fas fa-temperature-high"></i> Temperatuur idas: <?= round($weatherEast[0]->celsius, 1) ?> ℃
        </span>
    </h2>
    <h2 class="title is-5 has-text-centered">
        <span>
            <i class="fa-regular fa-sun"></i>
            <i class="fa-solid fa-arrow-up"></i> Päike tõuseb: <?= gmdate('H:i:s', $sunrise) ?>
        </span>
    </h2>
    <h2 class="title is-5 has-text-centered">
        <span>
            <i class="fa-regular fa-sun"></i>
            <i class="fa-solid fa-arrow-down"></i> Päike loojub: <?= gmdate('H:i:s', $sunset) ?>
        </span>
    </h2>
</div>