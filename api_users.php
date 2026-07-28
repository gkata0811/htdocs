<?php

$url = "https://jsonplaceholder.typicode.com/users";

$ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

// print_r($response);

if (curl_errno($ch)) {
    die("cURL hiba: " . curl_error($ch));
}

curl_close($ch);

$data = json_decode($response, true);
// echo "<pre>";
// print_r($data);

if(!$data) {
    die("Nem sikerült adatot lekérni!");
}

$randomFlight = $data[array_rand($data)];
$flightNumber = "FL-".rand(100, 999);

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Random járat</title>
<style>
body { font-family: Arial; background:#1c1c1c; color:white; text-align:center; }
.card { background:#333; padding:20px; margin:50px auto; width:400px; border-radius:10px; }
button { padding:10px 20px; }
</style>
</head>
<body>

<div class="card">
    <h1>:airplane: Véletlen járat</h1>
    <p><strong>Járatszám:</strong> <?= $flightNumber ?></p>
    <p><strong>Légitársaság:</strong> <?= htmlspecialchars($randomFlight['company']['name']) ?></p>
    <p><strong>Indulási város:</strong> <?= htmlspecialchars($randomFlight['address']['city']) ?></p>
    <p><strong>Kapcsolat:</strong> <?= htmlspecialchars($randomFlight['email']) ?></p>

    <br>
    <form method="get">
        <button type="submit">Új járat</button>
    </form>
</div>

</body>
</html>