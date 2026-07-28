<?php

$API_key = "ertdtgdrthr675675u56urf6zrft";
$city = "Budapest";
$units = "metric";
$lang = "hu";

$url = "https://api.openweathermap.org/data/3.0/onecall?lat=33.44&lon=-94.04&exclude=hourly,daily&appid=472592791d5a17a11c6befc9f2ffbbfa";

//url magyarázat
//? paraméter lista kezdete
// paraméter  név=érték
// & jel a paraméterk kötéséhez

$ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
$response = curl_exec($ch);
?>