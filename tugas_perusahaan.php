<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perusahaan techNova</title>
</head>
<body>
    <fieldset>
        <legend>perusahaan teknologi TechNova</legend>
        <form action="" method="post">
        <label for="">nama</label>
        <input type="text" name="nama">
        <br>
        <label for="">ID</label>
        <input type="number" name="id">
        <br>
        <label for="">gaji pokok</label>
        <input type="number" name="gaji">
        <br>
        <label for="">status personal karyawan</label>
        <select name="status_personal" id="">
        <option value="menikah">menikah</option>
        </select>
        <label for="">status karyawan</label>
        <select name="status_karyawan" id="">
        <option value="manager">manager</option>
        <option value="supervisor">supervisor</option>
        <option value="staff">staff</option>
        </select>
        <br>
        <label for="">status kepegawaian</label>
        <select name="status_kepegawaian" id="">
        <option value="tetap">tetap</option>
        <option value="kontrak">kontrak</option>
        </select>
        <br>
        <button type="submit">submit</button>
        </form>
    </fieldset>
    <?php
class Pegawai {
    public $nama, $id, $gaji, $status_karyawan, $status_kepegawaian;
    
    public function __construct($nama, $id, $gaji, $status_karyawan, $status_kepegawaian) {
        $this->nama = $nama;
        $this->id = $id;
        $this->gaji = $gaji;
        $this->status_karyawan = $status_karyawan;
        $this->status_kepegawaian = $status_kepegawaian;
    }

    public function tunjanganA() {
        if ($this->status_karyawan == 'manager') {
            return 0.20 * $this->gaji;
        } elseif ($this->status_karyawan == 'supervisor') {
            return 0.15 * $this->gaji;
        } elseif ($this->status_karyawan == 'staff') {
            return 0.10 * $this->gaji;
        }
    }
    public function tunjanganB() {
        if ($this->status_kepegawaian == 'tetap') {
            return 500000 + $this->gaji;
        } else {
            return 0;
        }
    }
    public function totalTunjangan() {
        return $this->tunjanganA() + $this->tunjanganB();
    }
}
        if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
            $nama = $_POST['nama'];
            $id = $_POST['id'];
            $gaji = $_POST['gaji'];
            $status_karyawan = $_POST['status_karyawan'];
            $status_kepegawaian = $_POST['status_kepegawaian'];

            $pegawai = new pegawai($nama,$id,$gaji,$status_karyawan,$status_kepegawaian);
            echo "nama: " . $pegawai->nama . "<br>";
            echo "ID: " . $pegawai->id . "<br>";
            echo "gaji: " . $pegawai->gaji . "<br>";
            echo "status karyawan: " . $pegawai->status_karyawan . "<br>";
            echo "status kepegawaian: " . $pegawai->status_kepegawaian . "<br>";
            echo "tunjangan jabatan: " . $pegawai->tunjanganA() . "<br>";
            echo "tunjangan transportasi: " . $pegawai->tunjanganB() . "<br>";
            echo "total tunjangan: " . $pegawai->totaltunjangan() . "<br>";

        }
?>
</body>
</html>