<?php
class Laptop{
    // property
    public $merek;
    public $warna;
    public $ram;

    // construct
    public function __construct($merek,$warna,$ram){
        $this->merek = $merek;
        $this->warna = $warna;
        $this->ram = $ram;
    }

    // method
    public function tampilkanData(){
        echo "===DATA LAPTOP===<br>";
        echo "Merek :". $this->merek. "<br>";
        echo "Warna :". $this->warna. "<br>";
        echo "RAM :". $this->ram. "GB<br>";
    }

    public function nyalakan(){
        echo "<br>Laptop {$this->merek} berhasil dinyalakan.";
    }
}

// object
$laptop1 = new Laptop("ASUS","HITAM", 16);

// Memanggil Method
$laptop1->tampilkanData();
$laptop1->nyalakan();
?>