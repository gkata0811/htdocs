<?php

$sarkany = [12, 34, 6, 9, 56, 70];
$letra= [11, 67, 90, 2, 4, 33];
$pozicio = 0;
$loop = 0;
$s_szam = 0;
$l_szam = 0;

echo "<h4 style='color: blue'>Sárkány - létra játék 1.0</h4>";
while($pozicio < 100){
        $dob = rand(1,6);
        $pozicio = $pozicio + $dob;

        foreach($sarkany as $s){
            if ($s == $pozicio){
                $pozicio = $pozicio - 10;
                $s_szam++;
                }
           }
        foreach($letra as $l){
            if ($l == $pozicio){
                $pozicio = $pozicio + 10;
                $l_szam++;
                }
           }
        $loop++;   
    }

echo "A játék $loop körös volt.<br>";
echo "A sárkányok száma: $s_szam darab.<br>";
echo "A létrák száma $l_szam darab.<br>";

?>