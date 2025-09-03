<?php
class motor {
    public $merk;
    public $warna;
    public $mesin;

    public function __construct($merk,$warna,$mesin)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->mesin = $mesin;
    }

    public function jalan()
    {
        return "berjalan hingga di kecepatan 125km/j";
    }
}

$honda = new motor("supra","hitam","150CC");
echo "nama motor honda:" . $honda->merk . "<br>";
echo "warna motor:" . $honda->warna . "<br>";
echo "berkapasitas mesin:" . $honda->mesin . "<br>";
echo "motor ini dapat" . $honda->jalan() . "<br>";