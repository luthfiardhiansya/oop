<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>biodata siswa</legend>
    <form action="" method="post">
     <label for="">nama</label>
     <input type="text" name="nama">
     <br>
     <label for="">kelas</label>
     <input type="text" name="kelas">
     <br>
     <label for="">jenis_kelamin</label>
     <input type="text" name="jenis_kelamin">
     <br>
     <label for="">tanggal_lahir</label>
     <input type="date" name="tanggal_lahir">
     <br>
     <label for="">agama</label>
     <select name="agama" id="">
     <option value="islam">islam</option>
     <option value="kristen">kristen</option>
     <option value="hindu">hindu</option>
     <option value="buddha">buddha</option>
     <option value="konghucu">konghucu</option>
     </select>
     <br>
     <button type="submit">submit</button>
    </form>
    </fieldset>

    <?php
    class biodata {
        public $nama,$kelas,$jenis_kelamin,$tanggal_lahir,$agama;

        public function __construct($nama,$kelas,$jenis_kelamin,$tanggal_lahir,$agama)
        {
            $this->nama =$nama;
            $this->kelas =$kelas;
            $this->jenis_kelamin =$jenis_kelamin;
            $this->tanggal_lahir =$tanggal_lahir;
            $this->agama =$agama;
        }

        public function tampilkanbiodata()
        {
        return "nama: " . $this->nama . "<br>" .
        "kelas: " . $this->kelas . "<br>" .
        "jenis kelamin: " . $this->jenis_kelamin . "<br>" .
        "tanggal lahir: " . $this->tanggal_lahir . "<br>" .
        "agama: " . $this->agama . "<br>";
        }
    }

        if ($_SERVER['REQUEST_METHOD'] ==  'POST')  {
            $a = $_POST['nama'];
            $b = $_POST['kelas'];
            $c = $_POST['jenis_kelamin'];
            $d = $_POST['tanggal_lahir'];
            $e = $_POST['agama'];

            $biodata = new biodata($a, $b, $c, $d, $e);
            echo $biodata->tampilkanbiodata();
        }
?>
    
</body>
</html>