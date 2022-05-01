<?php

function show($array)
{
    echo '<pre>';
    print_r($array);
    echo '/<pre>';
}

function dateToEst($datestr)
{
    $dateParts = explode(' ', $datestr); // tükeldatakse kriipsu kohalt
    $date = $dateParts[0];
    $time = $dateParts[1];
    $date = explode('-', $date);
    $day = $date[2];
    $month = $date[1];
    $year = $date[0];
    return $day . "." . $month . "." . $year . ' ' . $time;
}

function windDegToText($data)
{
    if ($data < 23 && $data > 338) {
        return 'põhjatuul';
    } elseif ($data > 23 && $data < 67) {
        return 'kirdetuul';
    } elseif ($data > 67 && $data < 112) {
        return 'idatuul';
    } elseif ($data > 112 && $data < 157) {
        return 'kagutuul';
    } elseif ($data > 157 && $data < 202) {
        return 'lõunatuul';
    } elseif ($data > 202 && $data < 247) {
        return 'edelatuul';
    } elseif ($data > 247 && $data < 292) {
        return 'läänetuul';
    } elseif ($data > 292 && $data < 338) {
        return 'loodetuul';
    }
}