<?php
	
$a = 10;
$b = 12.5;
$c = 2;

echo $b. "<br>";

echo $a + $b."<br>";
echo $a - $b."<br>";
echo $a * $b."<br>";
echo $a / $c."<br>";
echo $a % $c."<br>";
echo $a ** $b."<br>";

$a++;
$a--;

$szam = $a + $b;
$szam2 =(($a + $b) * $c) / 5;

echo $szam."<br>";
echo $szam2."<br>";

echo $a." - ".$a."<br>";
echo "a"."b".$c."<br>";

$ar = 4000;

echo "A termék ára: ".$ar." Ft"."<br>";

$x = 20;
$y = 30;

echo $x." + ".$y." = ".$x+$y."<br>";

$x =5;

echo $x." + ".$y." = ".$x+$y."<br>";

//________ szöveges változók
/*
Több
soros
komment
*/

$sz = "Hello";
$text = "200";
$text2 = "20a";

echo 5 + $text."<br>";
//echo 5 + $text2; hiba

$t = (int) $text; //számmá alakítunk

echo strlen($sz)."<br>"; //strlen() függvény megmondja egy szöveg hosszát
echo str_repeat("ha", 3)."<br>";
echo strtolower($sz)."<br>"; //strtolower() függvény kisbetűssé alakítja a szöveget
$sz = strtolower($sz);
echo strtoupper($sz)."<br>"; //strtoupper() függvény nagybetűssé alakítja a szöveget
echo substr($sz,0,2)."<br>"; //substr() függvény visszaadja a szöveg egy részét
echo strpos("almafa","fa")."<br>";
echo str_replace("a","o","alma")."<br>"; //str_replace() függvény kicseréli a szöveg egy részét

?>