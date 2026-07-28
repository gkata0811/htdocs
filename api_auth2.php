<?php

$apiKey = "aieonrhpfvgnjaehr9";

$url = "https://minta...";

$headers = [
    "Authorization: Bearer $apiKey",
    "Accept: application/json",
    "Content-Type: application/json",
    "User-Agent: MyApp/1.0"
];

$ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);

$data = json_decode($response, true);

?>