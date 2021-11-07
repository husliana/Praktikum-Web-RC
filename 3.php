<?php
    echo "Bilangan prima dari 1 - 50 adalah : <br>";
    for($i=1; $i<=50; $i++){
        $n = 0;
        for($j=1; $j<=$i; $j++){
            if($i % $j == 0){
                $n++;
            }
        }
        if($n == 2){
            echo $i."<br>";
        }
    }
?>