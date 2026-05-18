<?php

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
if (isset($_POST['tampil'])) {
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $angka1 = floatval($_POST['angka1'] ?? 0);
    $angka2 = floatval($_POST['angka2'] ?? 0);
    $operator = $_POST['operator'];
    // $hasil = 0;


    function hasilPerhitungan($angka1, $angka2, $operator)
    {

        switch ($operator) {
            case 'kali':
                return $angka1 * $angka2;
                break;
            case 'bagi':
                return $angka2 != 0 ? ($angka1 / $angka2) : "Error jancu";
                break;
            case 'tambah':
                return $angka1 + $angka2;
                break;
            case 'kurang':
                return $angka1 - $angka2;
                break;

            default:
                return "salah kamu asu";
                break;
        }
    }

    // $hasil = $angka1 * $angka2;

    echo "Nama Saya adalah " . $name . " Nim saya " . $nim . ", Alamatnya di " . $alamat . " hasilnya " .  hasilPerhitungan($angka1, $angka2, $operator);
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
        <label for="">Nama</label><br>
        <input type="text" name="name"><br>
        <label for="">NIM</label><br>
        <input type="number" name="nim"><br>
        <label for="">Alamat</label><br>
        <textarea name="alamat" cols="30" rows="10"></textarea><br>
        <label for="">Number 1</label><br>
        <input type="number" name="angka1"><br>
        <label for="">Number 2</label><br>
        <input type="number" name="angka2"><br>
        <select name="operator" id="">
            <option value="kali">*</option>
            <option value="bagi">/</option>
            <option value="tambah">+</option>
            <option value="kurang">-</option>
        </select>


        <button type="submit" name="tampil">Tampilkan Data</button>
    </form>
</body>

</html>