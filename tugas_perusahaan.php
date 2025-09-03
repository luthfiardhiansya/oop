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
        <label for="">status kepegawaian</label>
        <select name="status" id="">
        <option value="tetap">tetap</option>
        <option value="kontrak">kontrak</option>
        </select>
        <br>
        <button type="submit">submit</button>
        </form>
    </fieldset>
    <?php
class pegawai() {
    public
    $nama,$id,$gaji,$status;
    
    public function __construct($nama,$id,$gaji,$status)
    {
        $this->nama =$nama;
        $this->id =$id;
        $this->gaji =$gaji;
        $this->status =$status;
    }

}
        if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
            $a = $_POST['nama'];
            $i = $_POST['id'];
            $g = $_POST['gaji'];
            $s = $_POST['status'];

            $pegawai = new pegawai($a,$i,$g,$s);
            echo "nama " . $this->a . ;
        }
?>
</body>
</html>