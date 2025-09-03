<?php
class siswa {
    public $umur;
    public $tinggi;
    public $tempat_lahir;

    public function __construct($umur,$tinggi,$tempat_lahir)
    {
        $this->umur = $umur;
        $this->tinggi = $tinggi;
        $this->tempat_lahir = $tempat_lahir;
    }

    public function kelompok()
    {
        return " kerja kelompok";
    }
}

$budi = new siswa("17 tahun","170cm","bandung");
echo "budi umurnya:" . $budi->umur . "<br>";
echo "budi tingginya:" . $budi->tinggi . "<br>";
echo "budi lahir di:" . $budi->tempat_lahir . "<br>";
echo "budi sedang" . $budi->kelompok() . "<br>";

echo "<hr>";

$rehan = new siswa("30 tahun","166cm","bandung");
echo "rehan umurnya:" . $rehan->umur . "<br>";
echo "rehan tingginya:" . $rehan->tinggi . "<br>";
echo "rehan lahir di:" . $rehan->tempat_lahir . "<br>";
echo "rehan sedang" . $rehan->kelompok() . "<br>";

echo "<hr>";

$dadan = new siswa("17 tahun","172cm","bandung");
echo "dadan umurnya:" . $dadan->umur . "<br>";
echo "dadan tingginya:" . $dadan->tinggi . "<br>";
echo "dadan lahir di:" . $dadan->tempat_lahir . "<br>";
echo "dadan sedang" . $dadan->kelompok() . "<br>";

echo "<hr>";

$maryana = new siswa("16 tahun","169cm","bandung");
echo "maryana umurnya:" . $maryana->umur . "<br>";
echo "maryana tingginya:" . $maryana->tinggi . "<br>";
echo "maryana lahir di:" . $maryana->tempat_lahir . "<br>";
echo "maryana sedang" . $maryana->kelompok() . "<br>";

echo "<hr>";