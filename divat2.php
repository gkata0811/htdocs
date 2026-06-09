<?php

$felso = ["fehér póló", "kék pulcsi", "fekete ing", "csíkos garbó"];
$also = ["fehér nadrág", "piros szoknya", "barna rövidnadrág", "rakott szoknya"];
$cipo = ["fekete szandál", "sportcipő", "kék bakancs", "barna csizma"];

echo "<h4 style='color: red;'>Szettek:</h4>";
for( $i = 0; $i < 10; $i++ ) {
    $f = rand(0,3);
    $a = rand(0,3);
    $c = rand(0,3);

    if( strpos($also[$a], "szoknya" ) > 0) {
        echo "<h4 style='color: gold;'>" . $felso[$f] . " - " . $also[$a] . " - " . $cipo[$c] . "</h4><br>";
    } else {
        echo "<h4 style='color: blue;'>" . $felso[$f] . " - " . $also[$a] . " - " . $cipo[$c] . "</h4><br>";
    }
}

?>