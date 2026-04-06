<?php

//Class Induk
class SivitasAkademik {

    protected $nama;

    // Constructor
    public function __construct($nama){
        $this->nama = $nama;
    }

    // Getter
    public function getNama(){
        return $this->nama;
    }

}

//Class Anak 1
class Dosen extends SivitasAkademik {

    private $nidn;

    public function __construct($nama, $nidn){
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    public function tampilDosen(){
        echo "Data Dosen <br>";
        echo "Nama : " . $this->getNama() . "<br>";
        echo "NIDN : " . $this->nidn . "<br><br>";
    }

}

//Class Anak 2
class Mahasiswa extends SivitasAkademik {

    private $nim;

    public function __construct($nama, $nim){
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function tampilMahasiswa(){
        echo "Data Mahasiswa <br>";
        echo "Nama : " . $this->getNama() . "<br>";
        echo "NIM : " . $this->nim . "<br><br>";
    }

}

// Membuat object
$dosen1 = new Dosen("Ajib Abdul Kholiq, S.Kom.", "123456");
$mahasiswa1 = new Mahasiswa("Surya Kevin", "2306700031");

// Menampilkan data
$dosen1->tampilDosen();
$mahasiswa1->tampilMahasiswa();