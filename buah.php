<?php

include "index.html";

class buah{
    
    public function __construct($mangga, $jambu, $salak){
        $this->mangga=$mangga;
        $this->jambu=$jambu;
        $this->salak=$salak;
    }
    public function Mangga(){
        $this->mangga *= 15000;
        return $this->mangga;
    }
    public function Jambu(){
        $this->jambu *= 13000;
        return $this->jambu;
    }
    public function Salak(){
        $this->salak *= 10000;
        return $this->salak;
    }
    public function Total(){
        $total=$this->mangga+$this->jambu+$this->salak;
        return $total;
    }
}

$mangga=$_POST['mangga'];
$jambu=$_POST['jambu'];
$salak=$_POST['salak'];
$belanja=new buah($mangga,$jambu,$salak);
echo '<h4> Harga Mangga: '.$belanja->mangga();
echo "<br>";
echo '<h4> Harga jambu: '.$belanja->jambu();
echo "<br>";
echo '<h4> Harga Salak: '.$belanja->salak();
echo "<br>";
echo '<h4> Total Harga: '.$belanja->Total();
?>