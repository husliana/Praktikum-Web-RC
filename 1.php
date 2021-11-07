<?php
    $X=10;
    $Y=5;
    echo "Bilangan 1 = $X <br>";
    echo "Bilangan 2 = $Y <br>";
    echo "<br> Berikut merupakan hasil dari setiap operasi <br>";
    penjumlahan($X, $Y);
    pengurangan($X, $Y);
    perkalian($X, $Y);
    pembagian($X, $Y);
    modulus($X, $Y);

    function penjumlahan($x, $y){
        $hasil = $x + $y;
        echo "<br> PENJUMLAHAN <br>";
        echo "Oerator : + <br>";
        echo "Hasil : $hasil <br>";
    }

    function pengurangan($x, $y){
        $hasil = $x - $y;
        echo "<br> PENGURANGAN <br>";
        echo "Oerator : - <br>";
        echo "Hasil : $hasil <br>";
    }

    function perkalian($x, $y){
        $hasil = $x * $y;
        echo "<br> PERKALIAN <br>";
        echo "Oerator : * <br>";
        echo "Hasil : $hasil <br>";
    }

    function pembagian($x, $y){
        $hasil = $x / $y;
        echo "<br> PEMBAGIAN <br>";
        echo "Oerator : / <br>";
        echo "Hasil : $hasil <br>";
    }

    function modulus($x, $y){
        $hasil = $x % $y;
        echo "<br> MODULUS <br>";
        echo "Oerator : % <br>";
        echo "Hasil : $hasil <br>";
    }
?>