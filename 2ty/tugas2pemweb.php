<?php

class SivitasAkademik {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends SivitasAkademik {
    protected $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}
class Mahasiswa extends SivitasAkademik {
    protected $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}

$dosen1 = new Dosen("Budi Santoso", "0123456789");
$dosen2 = new Dosen("Leon S Komedi", "1248612394");
$dosen3 = new Dosen("Chris Red Field", "8972499272");
$mahasiswa1 = new Mahasiswa("Andi Saputra", "2310112345");
$mahasiswa2 = new Mahasiswa("Sapitri Nuril", "2310117189");
$mahasiswa3 = new Mahasiswa("Reffi Salma", "2198676785");

echo "<h3>Data Dosen</h3>";
echo "Nama : " . $dosen1->getNama() . "<br>";
echo "NIDN : " . $dosen1->getNidn() . "<br><br>";

echo "Nama : " . $dosen2->getNama() . "<br>";
echo "NIDN : " . $dosen2->getNidn() . "<br><br>";

echo "Nama : " . $dosen3->getNama() . "<br>";
echo "NIDN : " . $dosen3->getNidn() . "<br><br>";

echo "<h3>Data Mahasiswa</h3>";
echo "Nama : " . $mahasiswa1->getNama() . "<br>";
echo "NIM : " . $mahasiswa1->getNim() . "<br><br>";

echo "Nama : " . $mahasiswa2->getNama() . "<br>";
echo "NIM : " . $mahasiswa2->getNim() . "<br><br>";

echo "Nama : " . $mahasiswa3->getNama() . "<br>";
echo "NIM : " . $mahasiswa3->getNim() . "<br>";

?>