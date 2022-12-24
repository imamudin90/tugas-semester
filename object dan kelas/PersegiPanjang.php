<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;
    public $hitungLuas;

    public function __construct($panjang, $lebar) {
        $this->panjang=($panjang);
        $this->lebar=($lebar);
    }
    public function panjang() {
        return $this->panjang ;
    }
    public function lebar() {
        return $this->lebar ;
    }
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

$persegiPanjang = new PersegiPanjang(20,3);
echo "Panjangnya adalah =" .$persegiPanjang->panjang();
echo "<br>";
echo "Lebarnya adalah = " .$persegiPanjang->panjang();
echo "<br>";
echo "Luas = ".$persegiPanjang->hitungLuas();
