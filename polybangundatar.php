<?php
# Parent Class
abstract class BangunDatar {

    abstract public function hitungLuas();

}

# Child Class Persegi
class Persegi extends BangunDatar {

    private $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }

    public function hitungLuas(){
        return $this->sisi * $this->sisi;
    }

}

# Child Class Lingkaran
class Lingkaran extends BangunDatar {

    private $r;

    public function __construct($r){
        $this->r = $r;
    }

    public function hitungLuas(){
        return 3.14 * $this->r * $this->r;
    }

}

# Child Class Segitiga
class Segitiga extends BangunDatar {

    private $alas;
    private $tinggi;

    public function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas(){
        return 0.5 * $this->alas * $this->tinggi;
    }

}

# Pemanggilan
$persegi = new Persegi(4);
$lingkaran = new Lingkaran(7);
$segitiga = new Segitiga(6,8);

echo "Luas Persegi : ".$persegi->hitungLuas();
echo "<br>";

echo "Luas Lingkaran : ".$lingkaran->hitungLuas();
echo "<br>";

echo "Luas Segitiga : ".$segitiga->hitungLuas();
?>