<?php
    echo "Data sebelum diurutkan : larine, aduh, qifuat. toda, anevi, samid, kifuat <br>";
    echo "<br> Data setelah diurutkan : <br>";
    $nama = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    sort($nama);
    for ($i=0; $i<=6; $i++){
        echo $nama[$i]."<br>";
    }
?>