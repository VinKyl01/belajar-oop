<?php
class Mobil {
    public $merk;
    public $warna;
}

$mobil1= new Mobil();
$mobil1->merk = "Toyota";
$mobil1->warna = "Merah";

echo "Merek Mobil: $mobil1->merk <br>";
echo "Warna Mobil: $mobil1->warna <br>";