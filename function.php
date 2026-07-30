<?php
$a = 10;
$b = 20;

function koszon(){
    echo "Hello<br>";
}

function koszon2($nev){
    echo "Hello $nev<br>";
}

function szamol($x, $y){
    echo ($x + 100)* $y . "<br>";
}

function szamol2($x, $y){
    return $x + $y;
}

function szoveg($t){
    $text = "Ma ";
    echo $text . $t . "<br>";
}

function szoveg2($t){
    $text = "Ma ";
    return $text . $t;
}

function tomb(){
    $tomb = [1,2,3,4,5,6];
    return $tomb;
}

function szoveg3($t = "hétvége van"){ // default paraméter érték
    $text = "Ma ";
    return $text . $t;
}

koszon();
koszon2("Csaba");
szamol($b, 2);
$szam = szamol2(20,40);
szoveg("kedd van");
echo szoveg2("kedd van");
echo "<br>";
$t = tomb();
print_r(tomb());
echo "<br>";
echo szoveg3();

?>