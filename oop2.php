<?php
class laptop {
    public $merk = "asus tuf";
    public $warna = "hitam golssy";

    public function nyala()
    {
        return "menyala/jalan";
    }
    public function mati()
    {
        return "di pencet shut down mati";
    }
}

$laptop1 = new laptop();
echo "warna laptop :" . $laptop1->warna . "<br>";
echo "merk nya:". $laptop1->merk . "<br>";
echo "jika di pencet on maka:" . $laptop1->nyala() . "<br>"; 