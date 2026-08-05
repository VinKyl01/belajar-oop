<?php 
class siswa {
    public $nama;
    public $jurusan;
    public $nilai;

    public function __construct($nama, $jurusan, $nilai) {
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->nilai = $nilai;
    }
    public function perkenalan() {
    echo "Halo, nama saya $this->nama dari jurusan $this->jurusan, nilai saya $this->nilai <br>";
}
}
$siswa1 = new siswa("Vin", "TKJ", 95);
$siswa1->perkenalan();

?>