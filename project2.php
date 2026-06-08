<?php

/*
$nev1= "Anna ";
$nev2= "Csaba ";
$nev3= "Zsolt ";
$nev4= "Ildi ";

$kor1 = "25 ";
$kor2 = "30 ";
$kor3 = "29 ";
$kor4 = "22 ";

echo $nev1 . $kor1 . "éves.<br>";
echo $nev2 . $kor2 . "éves.<br>";
echo $nev3 . $kor3 . "éves.<br>";
echo $nev4 . $kor4 . "éves.<br>";
echo "<br>";

$atlag = $kor1 + $kor2 + $kor3 + $kor4;
$atlag = (int) $atlag;
echo "A diákok átlag életkora: " . $atlag / 4 . " év.<br>";
*/

$nev = ["Anna ", "Csaba ", "Zsolt ", "Ildi "];
$kor = [25, 30, 29, 22];
$varos = ["Pécs", "Sopron", "Szeged", "Eger"];

$i = 0;
foreach ($nev as $n) {
    echo $n . $kor[$i] . " éves és " . $varos[$i] . " lakosa.<br>";
    $i++;
}

echo "A diákok átlag életkora: " . array_sum($kor) / count($kor) . " év.<br>";

//_____________________________________________________________________________________________

$tomb = ["alma", "körte", "barack"];
// kezdő
$tomb[0] = "ALMA";
$tomb[1] = "KÖRTE";
$tomb[2] = "BARACK";

foreach ($tomb as $t) {
    echo $t . ", ";
}
echo "<br>";

// haladó
foreach ($tomb as $t) {
    echo strtoupper($t) . ", ";
}
echo "<br>";

//pro
print_r(array_map(fn($e) => mb_strtoupper($e), $tomb));

//--------------





echo "<br>";
echo "<br>";
echo "_____________________________________________________________________________________";

$szamok = [];

for ($i = 0; $i < 100; $i++) {
    array_push($szamok, rand(1, 1000));
}

//echo "<pre>";
//print_r($szamok);

echo "<br>";
echo "<br>";
echo "_____________________________________________________________________________________";
echo "<br>";

$szamok = [
//   0 1 2
    [1,20,3], //0
    [4,5,6], //1
    [7,8,9] //2
];

foreach ($szamok as $szam) {
    foreach ($szam as $sz) {
        echo $sz . ",  ";
    }
}

?>