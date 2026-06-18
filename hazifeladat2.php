<?php

$user = [
    "Anna",
    "Bence",
    "Csilla",
    "Daniel",
    "Eszter",
    "Ferenc",
    "Greta",
    "Hunor",
    "Ildiko",
    "Janos",
    "Kata",
    "Laszlo",
    "Mira",
    "Norbert",
    "Orsolya",
    "Peter",
    "Reka",
    "Sandor",
    "Tamas",
    "Viktoria",
];

$bank = [];

for ($i = 0; $i < 20; $i++) {
    $bank[] = rand(100, 10000);
}

echo "Kezdő adatok<br>";

adatokKiirasa($user, $bank);

echo "<br>";
echo "A bank kezdő összvagyona: " . osszeg($bank) . " Ft<br>";

echo "<br>";
echo "Fizetések kiosztása:<br>";

for ($i = 0; $i < count($bank); $i++) {
    $fizetes = rand(10000, 100000);
    $regiPenz = $bank[$i];

    $bank[$i] += $fizetes;

    echo $user[$i] . ":<br>";
    echo "Régi vagyon: " . $regiPenz . " Ft<br>";
    echo "Fizetés: " . $fizetes . " Ft<br>";
    echo "Új vagyon: " . $bank[$i] . " Ft<br><br>";
}

echo "<br>";
echo "Új adatok:<br>";

adatokKiirasa($user, $bank);

echo "<br>";
echo "A bank új összvagyona: " . osszeg($bank) . " Ft<br>";

$legtobbIndex = 0;

for ($i = 1; $i < count($bank); $i++) {
    if ($bank[$i] > $bank[$legtobbIndex]) {
        $legtobbIndex = $i;
    }
}

echo "<br>";
echo "Legtöbb pénz a bankban:<br>";

echo "Név: " . $user[$legtobbIndex] . "<br>";
echo "Vagyon: " . $bank[$legtobbIndex] . " Ft<br>";

function osszeg($tomb)
{
    $szumma = 0;

    for ($i = 0; $i < count($tomb); $i++) {
        $szumma += $tomb[$i];
    }

    return $szumma;
}

function adatokKiirasa($nevek, $penzek)
{
    for ($i = 0; $i < count($nevek); $i++) {
        echo ($i + 1) . ". " . $nevek[$i] . ": " . $penzek[$i] . " Ft<br>";
    }
}

?>
