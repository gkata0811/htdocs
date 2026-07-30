<?php
// store felépítése:
// megnevezés | model | db | leltári szám | félretéve | ár
$store1 = [
    ["szék", "bársony", 26, "S1001/345", 4, 14500],
    ["asztal", "fekete kerek", 6, "S1002/325", 2, 39900],
    ["fotel", "kagyló", 12, "S1003/245", 6, 29900],
    ["komód", "fiókos", 9, "S1004/344", 3, 56500],
    ["gardrób", "PAX rendszer", 5, "S1005/145", 4, 123500],
    ["konyha szekrény", "elemes", 2, "S1005/145", 1, 210500]
];

$store2 = [
    ["szék", "bársony", 9, "S2001/345", 5, 14500],
    ["asztal", "fekete kerek", 3, "S2002/325", 2, 39900],
    ["fotel", "kagyló", 4, "S2003/245", 0, 29900],
    ["komód", "fiókos", 3, "S2004/344", 0, 56500],
    ["gardrób", "PAX rendszer", 2, "S2005/145", 1, 123500],
    ["konyha szekrény", "elemes", 4, "S2005/145", 1, 210500]
];

$move_item_name = "szék";
$move_item_count = 2;

//Functions
function osszesen($tomb, $nev){
    $ossz = 0;
    $felretett = 0;
    echo "<br>";
    $index = 0;
    echo "__________ $nev __________<br>";
    foreach($tomb as $t){
        $index++;
        $ossz = $ossz + $t[2] * $t[5];
        $felretett = $felretett + $t[4] * $t[5];
      echo "$index. $t[0] - $t[2] db <br>";
    }
    echo "<br>A raktár össz értéke: $ossz Ft.";
    echo "<br>A raktár foglalt készletének össz értéke: $felretett Ft.<br>";
}

function move_store($store1, $store2, $move_item_name, $move_item_count){
    // készlet csökkentés
    echo "<br>Raktás módosítás (Store1)<br>";
      foreach($store1 as $s){
            if(($s[0] == $move_item_name) && ($s[2] >= $move_item_count)){
            echo "$s[0] aktuális darabszáma: $s[2] <br>";
            $s[2] = $s[2] - $move_item_count;
            echo "$s[0] aktuális darabszáma módosítás után: $s[2] <br>";
        }
    }

    // készlet növelés
    echo "Raktás módosítás (Store2)<br>";
    foreach($store2 as $s){
        if($s[0] == $move_item_name){
            echo "$s[0] aktuális darabszáma: $s[2] <br>";
            $s[2] = $s[2] + $move_item_count;
            echo "$s[0] aktuális darabszáma módosítás után: $s[2] <br>";
        }
    }
}

echo "Készletnyilvántartó (lekérdezés) 3.0";
// 1. Írjuk ki a raktárak összértékét külön-külön.
// 2. Bővítsük az 1-es feladatot.
// Írjuk ki a raktárban található tételek darabszámát raktáronként.
// 3. Bővítsük az 2-es feladatot.
// Írjuk ki a két raktárban található félretett tételek összértékét is.
osszesen($store1, "Store1");
osszesen($store2, "Store2");

echo "<br>";
echo "<br>";

echo "Készletnyilvántartó (módosítás) 3.0";
// 1. Hozzunk át az első raktárból a másodikba 2 széket a megadott
// változók felhasználásával.
// 2. Bővítsük az 1-es feladatot.
// Írjunk ellenőrzést az 1. feladatban megadott raktár változásra.
// 3. Bővítsük az 2-es feladatot.
// Írjuk ki a változtatott tétel nevét és darabszámát mindkét raktárban
// a tranzakció előtt és után is.
move_store($store1, $store2, $move_item_name, $move_item_count);

echo "<br>";
echo "<br>";

echo "Készletnyilvántartó (beszerzés) 2.0";
// 1. Írjuk ki azokat az elemeket raktáronként, amelyek db száma kevesebb mint 5.
// a lista címe legyen "beszerzésre kijelölt termékek".
// 2. Bővítsük az 1-es feladatot.
// Amelyik termékből kevesebb van mint 3 , azt vastagon szedjük a listában.

?>