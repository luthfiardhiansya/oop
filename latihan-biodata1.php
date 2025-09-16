<?php
    class BMI
    {
        public $tanggal_lahir;
        public $berat;
        public $tinggi;
        public $nama;
        public $jenis;

        public function __construct($tanggal_lahir, $berat, $tinggi, $nama, $jenis)
        {
            $this->tanggal_lahir = $tanggal_lahir;
            $this->berat         = $berat;
            $this->tinggi        = $tinggi;
            $this->nama          = $nama;
            $this->jenis         = $jenis;
        }

        public function hasilBMI()
        {
            $tinggi_m = $this->tinggi / 100;
            $bmi      = $this->berat / ($tinggi_m * $tinggi_m);
            return round($bmi, 1);
        }

        public function umur()
        {
            $tanggal_lahir = new DateTime($this->tanggal_lahir);
            $sekarang      = new DateTime("today");
            if ($tanggal_lahir > $sekarang) {
                exit("0 tahun");
            }
            $y = $sekarang->diff($tanggal_lahir)->y;
            return $y . " tahun";
        }

        public function keteranganBMI()
        {
            $bmi = $this->hasilBMI();
            if ($bmi < 18.5) {
                return "Kekurangan berat badan";
            } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                return "Normal (ideal)";
            } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
                return "Kelebihan berat badan";
            } else {
                return "Obesitas";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="">nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="">tanggal lahir</label></td>
                <td>:</td>
                <td><input type="date" name="tl" placeholder="Tanggal Lahir"></td>
            </tr>
            <tr>
            <td><label for="">jenis kelamin</label></td>
            <td>:</td>
            <td><input type="radio" name="jenis" value="laki-laki">laki-laki
                <input type="radio" name="jenis" value="perempuan">perempuan
            </td>
            </tr>
            <tr>
                <td><label for="">berat badan</label></td>
                <td>:</td>
                <td><input type="text" name="berat" placholder="Berat Badan (kg)"></td>
            </tr>
            <tr>
                <td><label for="">tinggi badan</label></td>
                <td>:</td>
                <td><input type="text" name="tinggi" placholder="Tinggi Badan (cm)"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
        <hr>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $bmi = new BMI($_POST['tl'], $_POST['berat'], $_POST['tinggi'], $_POST['nama'], $_POST['jenis']);
            echo "Nama : " . $bmi->nama . "<br>";
            echo "jenis kelamin " . $bmi->jenis . "<br>";
            echo "Umur Anda : " . $bmi->umur() . "<br>";
            echo "Hasil BMI Anda : " . $bmi->hasilBMI() . "<br>";
            echo "Keterangan : " . $bmi->keteranganBMI();
        }
    ?>
</body>
</html>