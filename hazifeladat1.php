<?php

$nev = ["Kata ", "Zoli ", "Zita ", "Ádám "];
$szuletesiEv = [2000, 2001, 1997, 1998];
$varos = ["Budapest", "Szigethalom", "Nagykanizsa", "Szolnok"];

$i = 0;
foreach ($nev as $n) {
    echo $n . $szuletesiEv[$i] . "-ben született és a születési helye " . $varos[$i] . ".<br>";
    $i++;
}
echo "<br>";

echo "Az átlag születési év: " . array_sum($szuletesiEv) / count($szuletesiEv) . ".<br>";

?>