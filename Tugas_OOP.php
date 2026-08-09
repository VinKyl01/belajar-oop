<?php
class Laptop {
    // Property
    public $merek;
    public $warna;
    public $ram;

    // 
    public function __construct($merek,$warna,$ram) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->ram = $ram;
    }

    // Method
    public function tampilkanData(){
        echo "===DATA LAPTOP===<br>";
        echo "Merek :". $this->merek."<br>";
        echo "Warna :". $this->warna."<br>";
        echo "Ram :". $this->ram."GB<br>";
    }

    public function nyalakan(){
        echo "<br>Laptop {$this->merek} Berhasil Dinyalakan.";
    }
}

// Object
$laptop1 = new Laptop("ASUS", "HITAM", 16);

// memanggil method
$laptop1->tampilkanData();
$laptop1->nyalakan();
?>