<?php

// endpoint
$helyesToken = "titkos123";

// header -ben küldött token
$headers = getallheaders();

if(!isset($headers['Authorization'])){
    http_response_code(401);
    echo json_encode(["hiba" => "Nincs token!"]);
    exit;
}

$token = str_replace("Bearer ", "", $headers['Authorization']);

if($helyesToken !== $token){
    http_response_code(401);
    echo json_encode(["hiba" => "Érvénytelen token!"]);
    exit;
}

echo json_encode([
    "status" => "Sikeres hitelesítés!",
    "felhasznalo" => "István"
]);

?>