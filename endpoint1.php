<?php

// endpoint get
header('Content-Type: application/json');

$user = [
    ["id" => 1, "name" => "Kiss Anna", "email" => "kissanna@example.com"],
    ["id" => 2, "name" => "Nagy Béla", "email" => "nagybela@example.com"],
    ["id" => 3, "name" => "Tóth Csilla", "email" => "thothcsilla@example.com"]
];

if($_SERVER['REQUEST_METHOD'] == "GET") {
    echo json_encode($user);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Method Not Allowed"]);
    exit;
}

echo json_encode($user);

?>