<?php

// client

$token = "titkos123";

$ch = curl_init("http://localhost/api_token_endpoint.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $token"]);
$response = curl_exec($ch);

curl_close($ch);

echo $response;



?>