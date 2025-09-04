<?php
class penggajian {
    public $nama,$no_id,$gp,$jabatan,$status_k,$status_kk;
    public $tj,$tt,$tm;

    public function __construct($a,$b,$c,$d,$e,$f)
    {
        $this->nama =$a;
        $this->no_id =$b;
        $this->gp =$c;
        $this->jabatan =$d;
        $this->status_k =$e;
        $this->status_kk =$f;
    }

    public function tunjanganjabatan()
    {
        $jabatan = $this->jabatan;

        if ($jabatan == "manager") {
            $this->tj = $this->gp * 0.2;
        } else if ($jabatan == "supervisor") {
            $this->tj = $this->gp * 0.15;
        } else if ($jabatan == "staff") {
            $this->tj = $this->gp * 0.15;
        } else {
            $this->tj = 0;
        }
        return $this->tj;
    }

    public function tunjangantransport() {
        $status = $this->status_k;
        $this_tt = 0;
        if ($status == "tetap") {
            $this->tt = 500000;
        } else {
            $this->tt = 0;
        }
        return $this->tt;
    }
    public function tunjanganmenikah() {
        $status = $this->status_kk;
        $this_tm = 0;
        if ($status == "menikah") {
            $this->tm = 300000;
        } else {
            $this->tm = 0;
        }
        return $this->tm;
    }

    public function gajikotor()
    {
        $gajikotor = $this->gp + $this->tunjanganjabatan() + $this->tunjangantransport() + $this->tunjanganmenikah();
        return $gajikotor;
    }

    public function pajak()
    {
        $pajak = $this->gajikotor() * 0.05;
        return $pajak;
    }

    public function gajibersih()
    {
        $gajibersih = $this->gajikotor() - $this->pajak();
        return $gajibersih;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form penggajian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        th, td {
            padding: 8px;
        }
        .table1 {
            background: grey; 
            
        }
        body {
            font-family: sans-serif;
            text-align: center;
            padding-top: 40px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table align="center" class="table1">
            <tr>
                <td><label for="">nama karyawan</label></td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="nama lengkap"></td>
            </tr>
            <tr>
                <td><label for="">no id karyawan</label></td>
                <td>:</td>
                <td><input type="number" name="no_id" placeholder="no id karyawan lengkap"></td>
            </tr>
            <tr>
                <td><label for="">gaji karyawan</label></td>
                <td>:</td>
                <td><input type="number" name="gp" placeholder="gaji pokok"></td>
            </tr>
            <tr>
                <td><label for="">status karyawan</label></td>
                <td>:</td>
                <td><input type="radio" name="status" value="tetap">tetap
                <input type="radio" name="status" value="kontrak">kontrak</td>
            </tr>
            <tr>
                <td><label for="">jabatan</label></td>
                <td>:</td>
                <td>
            <select name="jabatan" id="">
                <option value="manager">manager</option>
                <option value="supervisor">supervisor</option>
                <option value="staff">staff</option>
            </select>
                </td>
            </tr>
            <tr>
                <td><label for="">status menikah</label></td>
                <td>:</td>
                <td>
            <select name="status_kk" id="">
                <option value="menikah">menikah</option>
                <option value="belum menikah">belum menikah</option>
            </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit">simpan</button></td>
            </tr>
        </table>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") { 
        $a = $_POST['nama'];
        $b = $_POST['no_id'];
        $c = $_POST['gp'];
        $d = $_POST['jabatan'];
        $e = $_POST['status'];
        $f = $_POST['status_kk'];

        $gaji = new penggajian($a,$b,$c,$d,$e,$f);
    ?>
    <table border="1" align="center">
        <th>nama</th>
        <th>no id</th>
        <th>status karyawan</th>
        <th>gaji pokok</th>
        <th>jabatan</th>
        <th>status menikah</th>
        <tr>
            <td><?php echo $gaji->nama ?></td>
            <td><?php echo $gaji->no_id ?></td>
            <td align="center"><?php echo $gaji->status_k ?></td>
            <td><?php echo number_format($gaji->gp,0, ',', '.'); ?></td>
            <td><?php echo $gaji->jabatan ?></td>
            <td><?php echo $gaji->status_kk ?></td>
        </tr>
        <tr>
            <th>tunjangan jabatan</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->tunjanganjabatan(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>tunjangan transport</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->tunjangantransport(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>tunjangan menikah</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->tunjanganmenikah(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>gaji kotor</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->gajikotor(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>pajak</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->pajak(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>gaji bersih</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->gajibersih(), 0, ',', '.'); ?>
            </td>
        </tr>
    </table>
</body>
</html>
<?php } ?>