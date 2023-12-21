<?php
//inheritance Subkelas Makanan mewarisi sifat dan metode dari kelas dasar Menu.
class Makanan extends Menu {
    private $jenis;

    public function __construct($nama, $harga, $jenis) {
        parent::__construct($nama, $harga);
        $this->jenis = $jenis;
    }

    public function getJenisMakanan () {
        return $this->jenis;
    }
    //Metode tampilkanInfo() pada kelas Menu di-overriding oleh kelas Makanan
    //untuk menambahkan informasi spesifik.
    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Jenis: {$this->jenis} \n";
    }
}

?>
