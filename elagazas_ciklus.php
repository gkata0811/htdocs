<?php

// if
$szam = 10;
if ($szam == 10) {
    echo "true<br>";
}else{
    echo "false<br>";
}
$text = "10";
if ($szam === $text) {
    echo "true<br>";
}else{
    echo "false<br>";
}


// = értékadás, == érték összehasonlítás, === érték és típus összehasonlítás


$jegy = 3;
if ($jegy == 1) {
    echo 1 ."<br>";
}elseif ($jegy == 2) {
    echo 2 ."<br>";
}elseif ($jegy == 3) {
    echo 3 ."<br>";
}else{
    echo "Nagyobb mint 3<br>";
}


// ==   !=   <   >   <=   >=
// &&   ||


// függvény visszatérő értékekre
$t = [1,2,3,4,5];
if(count($t) > 10){
    echo "true<br>";
}
$sz = "4343trete";
if(strlen($sz) >= 10){
    echo "true<br>";
}


// switch case
$nap = 3;
switch ($nap) {
    case 1:
        echo "Hétfő<br>";
        break;
    case 2:
        echo "Kedd<br>";
        break;
    case 3:
        echo "Szerda<br>";
        break;
    case 4:
        echo "Csütörtök<br>";
        break;
    case 5:
        echo "Péntek<br>";
        break;
    default:
        echo "Hétvége<br>";
}


// while elöl tesztelő ciklus
$szamlalo = 1;
// addig fut, amíg true a feltétel
while ($szamlalo <= 5) {
    echo "i,<br>";
    $szamlalo++;
}


// do while hátul tesztelő ciklus
do {
    echo "k,<br>";
    $szamlalo++;
} while ($szamlalo <= 5);


// for
for ($p = 0; $p <= 10; $p++) { 
    echo "p: ".$p."<br>";
}
for ($s = 100; $s >= 10; $s--) { 
    echo "s: ".$s."<br>";
}
$t = [1,2,3,4,5];
for ($q = 0; $q <= count($t); $q++) { 
    echo $t[$q]."<br>";
}
$v = 10;
for ($z = 0; $z <= $v; $z++) { 
    echo $z."<br>";
    if ($z == 5) {
        break;
    }
}


// continue
$w = 10;
for ($a = 0; $a <= $w; $a++) {
    echo $a;    
    if ($a == 5) {
            continue;
        }
        echo "Itt vagyok!<br>";
    }


echo "<br>";
echo "<br>";


//___________________________ 1.
$tomb = ["kekjerwhe", "fgd-f.gd", "wejnfo@pejaken"];
$h = 1;
foreach ($tomb as $tt) {
    if (strpos($tt, "@") > 0) {
        echo $h . ". Tartalmaz @ jelet.<br>";
    }else{
        echo $h . ". Nem tartalmaz @ jelet.<br>";
    }
    $h++;
}


echo "<br>";
echo "<br>";


//___________________________ 2.
$szam = 10;
$i = 1;
while ($szam < 500) {
    $i++;
    $szam = rand(0,600);
}
echo $i." ciklusra volt szükség!<br>";

?>