<?php
class kucing {
    public $nama;
    public $warna;
    public $jenis;

    public function __construct($nama,$warna,$jenis)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis;
    }

    public function makan()
    {
        return "kucing sedang makan";
    }
}

$kucing1 = new kucing("luna","hitam","persia");
echo "nama kucing 1:" . $kucing1->nama . "<br>";
echo "warna kucing 1:" . $kucing1->warna . "<br>";
echo "jenis kucing 1:" . $kucing1->jenis . "<br>";