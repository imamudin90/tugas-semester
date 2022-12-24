<?php
class Segitiga{
    public $alas;
    public $tinggi;
    public $hitungLuas;

    public function __construct($alas, $tinggi){
        $this->alas=($alas);
        $this->tinggi=($tinggi);
    }
    public function alas() {
        return $this->alas ;
    }
    public function tinggi() {
        return $this->tinggi ;
    }
    public function hitungLuas() {
        return $this->alas * 1/2 * $this->tinggi;
    }
}

$luasSegitiga = new Segitiga(20,3);
echo "alas :".$luasSegitiga->alas();
echo "<br>";
echo "tinggi :".$luasSegitiga->tinggi();
echo "<br>";
echo "maka luas segitiga =".$luasSegitiga->hitungLuas();
