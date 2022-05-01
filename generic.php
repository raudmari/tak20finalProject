<?php
include 'templates/header.php';
include_once 'controllers/weathers.php';
include_once 'helpers/common.php';

$sunrise = ($data->sys->sunrise + $data->timezone);
$sunset = ($data->sys->sunset + $data->timezone);
$icon = 'https://openweathermap.org/img/wn/' . $data->weather[0]->icon . '@2x.png';
$icon2 = 'https://openweathermap.org/img/wn/' . $data2->daily[0]->weather[0]->icon . '@2x.png';
//show($data);
?>

<div class="container has-text-centered">
    <h1 class="subtitle m-6">Ilm: <?= $data->name ?></h1>
    <div class="columns is-centered">
        <table class="table">
            <thead>
                <tr>
                    <th class="title is-6">Temperatuur</th>
                    <th class="title is-6">Tajutav temp</th>
                    <th class="title is-6">Tuule suund</th>
                    <th class="title is-6">Tuule kiirus</th>
                    <th class="title is-6">Pilved</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= round($data->main->temp, 1) ?> ℃</td>
                    <td><?= round($data->main->feels_like, 1) ?> ℃</td>
                    <td><?= windDegToText($data->wind->deg) ?></td>
                    <td><?= $data->wind->speed ?> m/s</td>
                    <td>
                        <img src="<?= $icon ?>" alt="">
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="title is-6">Pilvisus</th>
                    <th class="title is-6">Õhurõhk</th>
                    <th class="title is-6">Õhuniiskus</th>
                    <th class="title is-6">Päike tõuseb</th>
                    <th class="title is-6">Päike loojub</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $data->clouds->all ?> %</td>
                    <td><?= $data->main->pressure ?> hpa</td>
                    <td><?= $data->main->humidity ?> %</td>
                    <td><?= gmdate('H:i:s', $sunrise) ?></td>
                    <td><?= gmdate('H:i:s', $sunset) ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    <h1 class="subtitle m-6">Homse ilma prognoos </h1>
    <div class="columns is-centered">
        <table class="table">
            <thead>
                <tr>
                    <th class="title is-6">Temperatuur</th>
                    <th class="title is-6">Tajutav temp</th>
                    <th class="title is-6">Tuule suund</th>
                    <th class="title is-6">Tuule kiirus</th>
                    <th class="title is-6">Pilved</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= round($data2->daily[0]->temp->day, 1) ?> ℃</td>
                    <td><?= round($data2->daily[0]->feels_like->day, 1) ?> ℃</td>
                    <td><?= windDegToText($data2->daily[0]->wind_deg) ?></td>
                    <td><?= $data2->daily[0]->wind_speed ?> m/s</td>
                    <td>
                        <img src="<?= $icon2 ?>" alt="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>