<?php
    function prima_number($number){
        for($a=1; $a<=$number; $a++){
            $c=0;
            for($b=1; $b<=$a; $b++){
                if($a % $b == 0){
                    $c++;
                }
            }
            if($c == 2){
                echo $a. ', ';
            }
        }
    }

    $nilai_max=50;
    echo "Semua Hasil Bilangan Prima Dari $nilai_max adalah : <br><br>";
    echo prima_number($nilai_max);
?>