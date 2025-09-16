<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">nama</label>
    <input type="text" name="nama">
    <br>
    <label for="">tanggal lahir</label>
    <input type="date" name="tgl">
    <br>
    <label for="">jenis kelamin</label>
    <input type="radio" name="jenis" value="laki-laki">laki-laki
    <input type="radio" name="jenis" value="perempuan">perempuan
    <br>
    <label for="">tinggi badan</label>
    <input type="number" name="tinggi">
    <br>
    <label for="">berat badan</label>
    <input type="number" name="berat">
    <br>
    <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>

<?php
class kesehatan {
    public $nama,$tgl,$jenis,$tinggi,$berat,$submit;

    public function __construct($a,$b,$c,$d,$e,$f)
    {
        $this->nama =$a;
        $this->tgl =$b;
        $this->jenis =$c;
        $this->tinggi =$d;
        $this->berat =$e;
        $this->submit =$f;
    }

    public function total ()
    {
        return $total = $this->tinggi / $this->berat;
    }

    public function bmi()
    {
    if ($this->total() >= 30) {
    echo "obesitas";
    } elseif ($this->total() >= 25) {
    echo "normal";
    } elseif ($this->total() >= 18) {
    echo "kurus";
    }
    return $bmi;
    }
}

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $a = $_POST['nama'];
        $b = $_POST['tgl'];
        $c = $_POST['jenis'];
        $d = $_POST['tinggi'];
        $e = $_POST['berat'];
        $f = $_POST['submit'];
    
    $sehat = new kesehatan($a,$b,$c,$d,$e,$f);

    echo "nama: " . $sehat->nama;
    echo "<br>";
    echo "tanggal lahir: " . $sehat->tgl;
    echo "<br>";
    echo "jenis kelamin: " . $sehat->jenis;
    echo "<br>";
    echo "tinggi badan: " . $sehat->tinggi;
    echo "<br>";
    echo "berat badan: " . $sehat->berat;
    echo "<br>";
    echo "BMI: " . $sehat->bmi();
}
?>