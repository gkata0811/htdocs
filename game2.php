<?php

$sarkany = [12, 34, 6, 9, 56, 70];
$letra = [11, 67, 90, 2, 4, 33];
$olaj = [14, 55, 36, 7, 55, 17];
$jatek = [];
$ossz_sarkany = 0;
$ossz_letra = 0;
$ossz_olaj = 0;
$pozicio = 0;
$loop = 0;
$s_szam = 0;
$l_szam = 0;
$o_szam = 0;
$d_szam = 10000;

echo "<h4 style='color: blue'>Sárkány - létra játék 2.0</h4>";

// játék körök száma:
for($i = 0; $i < $d_szam; $i++){

    // start
    while($pozicio < 100){
            $dob = rand(1,6);
            $pozicio = $pozicio + $dob;

            // sárkány ellenőr    
            foreach($sarkany as $s){
                if ($s == $pozicio){
                    $pozicio = $pozicio - 10;
                    $s_szam++;
                }
            }

            // létra ellenőr
            foreach($letra as $l){
                if ($l == $pozicio){
                    $pozicio = $pozicio + 10;
                    $l_szam++;
                }
            }

            // olaj ellenőr
            foreach($olaj as $o){
                if ($o == $pozicio){
                    $pozicio = $pozicio - 5;
                    $o_szam++;
                }
            }

            $loop++;   
        }

        // összegzés
        array_push($jatek, $loop);
        $ossz_sarkany = $ossz_sarkany + $s_szam;
        $ossz_letra = $ossz_letra + $l_szam;
        $ossz_olaj = $ossz_olaj + $o_szam;
        // változók nullázása
        $loop = 0;
        $pozicio = 0;
        $s_szam = 0;
        $l_szam = 0;
        $o_szam = 0;
    }

$avg = array_sum($jatek) / count($jatek);

echo "A(z) $d_szam játékból az átlag dobások száma: $avg db volt.<br>";
echo "A sárkányok száma: $ossz_sarkany darab.<br>";
echo "A létrák száma $ossz_letra darab.<br>";
echo "Az olajmezők száma $ossz_olaj darab.<br>"

?>