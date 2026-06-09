<?php

$felso = ["fehér póló", "kék pulcsi", "fekete ing", "csíkos garbó"];
$also = ["fehér nadrág", "piros szoknya", "barna rövidnadrág", "rakott szoknya"];
$cipo = ["fekete szandál", "piros körömcipő", "kék bakancs", "barna csizma"];

echo "<h4 style='color: red;'>Szettek:</h4>";
for( $i = 0; $i < 10; $i++ ) {
    $f = rand(0,3);
    $a = rand(0,3);
    $c = rand(0,3);

    echo $felso[$f] . " - " . $also[$a] . " - " . $cipo[$c] . "<br>";

    if( strpos($also[$a], "szoknya" ) > 0) {
        echo "Csak nőknek! <br>";
    }

    if( strpos($cipo[$c], "körömcipő" ) > 0) {
        echo "Csak nőknek! <br>";
    }
}

?>