<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>komplek</title>
</head>
<body>
    <form action="" method="post">
        <label for="" >biaya tetap</label>
        <input type="number" name="biaya">
        <br>
        <label for="">biaya per kwh</label>
        <input type="number" name="kwh">
        <br>
        <label for="">jumlah pemakaian</label>
        <input type="number" name="pemakaian">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>


<?php
class komplek {
    public $biaya, $kwh, $pemakaian;

    public function __construct($a,$b,$c)
    {
        $this->biaya =$a;
        $this->kwh =$b;
        $this->pemakaian=$c;
    }

    public function kali() 
    {
        return $kali = $this->kwh * $this->pemakaian;
    }

    public function tambahan()
    {
        if ($this->pemakaian > 500) {
           return $tambahan = $this->pemakaian + 100000;
        }
    }

    public function ppn()
    {
        $ppn = $this->tambahan() * 0.10;
        return $ppn;
    }

    public function total()
    {
        $total = $this->tambahan() - $this->ppn();
        return $total;
    }

    public function abonmen()
    {
        return $abonmen = $this->total() - $this->biaya;
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST['biaya'];
    $b = $_POST['kwh'];
    $c = $_POST['pemakaian'];

    $tagihan = new komplek($a,$b,$c);

    echo "abonemen: " . $tagihan->biaya;
    echo "<br>";
    echo "harga per kwh: " . $tagihan->kwh;
    echo "<br>";
    echo "jumlah pemakaian: " . $tagihan->pemakaian;
    echo "<br>";
    echo "harga total biaya: " .$tagihan->kali();
    echo "<br>";
    echo "total biaya tambahan: " .$tagihan->tambahan(); 
    echo "<br>";
    echo "total harga yang di bayar: " .$tagihan->abonmen();
}
?>