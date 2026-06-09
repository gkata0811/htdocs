<?php

$nevminta =  ["Zoltán", "Kata", "Gábor", "Csenge", "Luca", "Roland"];
$varosminta = ["Budapest", "Szeged", "Pécs", "Debrecen", "Miskolc", "Győr"];
$nev = [];
$kor = [];
$varos = [];
$users = [];
$user = [];

for($i = 0; $i < 50; $i++) {
    // név tömb feltöltése
    $flag = rand(0, 5);
    array_push($nev, $nevminta[$flag]);

    // kor tömb feltöltése
    $kor_aktualis = rand(18, 45);
    array_push($kor, $kor_aktualis);

    // város tömb feltöltése
    $flag2 = rand(0, 5);
    array_push($varos, $varosminta[$flag2]);

    // assoc tömb készítése
    $user["nev"] = $nevminta[$flag];
    $user["kor"] = $kor_aktualis;
    $user["varos"] = $varosminta[$flag2];

    array_push($users, $user);
}

//becho "<pre>";
// print_r($users);
echo "<br>";

echo "<h3>Név   kor  város</h3>";

foreach ($users as $u) {
    // $u = assoc tömb
    echo $u["nev"] . " , " . $u["kor"] . " , " . $u["varos"] . "<br>";
}

// minden budapesti user
echo "<h3>Budapesti felhasználók:</h3>";
foreach ($users as $u) {
    if($u["varos"] == "Budapest") {
        echo $u["nev"] . " , ";
    }
}

// minden budapesti user 2
echo "<h3>Budapesti felhasználók:</h3>";
$index = 0;
foreach ($varos as $v) {
    if($v == "Budapest") {
        echo $nev[$index] . " , ";
    }
    $index++;
}

// 30 évnél fiatalabbak
echo "<h3>30 évnél fiatalabbak:</h3>";
foreach ($users as $u) {
    if($u["kor"] < 30) {
        echo $u["nev"] . " , ";
    }
}

?>