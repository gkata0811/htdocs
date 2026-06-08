<?php

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
//die("Itt a vége"); futás vége
$atlag = (int) $atlag;
echo "A diákok átlag életkora: " . $atlag / 4 . " év.<br>";

//__________ 
// TÖMBÖK

echo "<br>";

$szam = [];
$szamok = [1,2,3,4,5];
//index 0 1 2 3 4
echo $szamok[4]. "<br>";
$szamok[0] = 10;
print_r($szamok). "<br>";
echo "<br>";


$szoveg = ["egy","kettő","három"];
echo $szoveg[0]. "<br>";
print_r($szoveg). "<br>";
echo "<br>";
$szoveg[0] = 10;

$igaz = [true, false, true, true];


// több dimenziós tömb
$szamok = [
//   0 1 2
    [1,20,3], //0
    [4,5,6], //1
    [7,8,9] //2
];

echo "<pre>";
print_r($szamok);
echo "<br>";
echo $szamok[0][1]."<br>";
print_r($szamok[0]);

//assoc tömb        kulcs-érték

$assoc =["egy" => 1, "kettő" => 2, "három" => 3];
$diak = ["nev" => "Anna", "kor" => 28, "dolgozik" => true];

print_r($diak);
echo $diak["nev"];
echo "<br>";

$diakok = [
    ["nev" => "Anna", "kor" => 28, "dolgozik" => true],
    ["nev" => "Csaba", "kor" => 30, "dolgozik" => true],
    ["nev" => "Zsolt", "kor" => 32, "dolgozik" => true]
    ];

print_r($diakok);
echo $diakok[1]["nev"];
echo "<br>";
echo $diakok[0]["nev"] . " " . $diakok[0]["kor"] . " éves.<br>";

//véletlen szám

$sz = rand(0,10);
echo $sz . "<br>";

var_dump($diakok);

?>