<!-- @copyright : Akbar yanuar Sapura -->

<?php

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
if (isset($_POST['tampil'])) {
    $name = $_POST['name'];
    $angka1 = floatval($_POST['angka1']);
    $angka2 = floatval($_POST['angka2']);
    $angka3 = floatval($_POST['angka3']);
    $pilihan = $_POST['pilihan'];
    $operator = $_POST['operator'];
    // $hasil = 0;


    function hasilPerhitungan($angka1, $angka2, $angka3, $operator, $pilihan)
    {

        switch ($operator) {
            case 'kubus':
                if ($pilihan == 'luas') {
                    return pow($angka1, 3);
                } else {
                    return 6 * pow($angka1, 2);
                }
                break;
            case 'balok':
                if ($pilihan == 'volume') {
                    return $angka1 * $angka2 * $angka3;
                } else {
                    return 2 * (($angka1 * $angka2) + ($angka1 * $angka3) + ($angka2 * $angka3));
                }
                break;
            case 'limas':
                if ($pilihan == 'volume') {
                    return 1 / 3 * ($angka1 * $angka2) * $angka3;
                }
                break;
            case 'tabung':
                if ($pilihan == 'volume') {
                    return M_PI * pow($angka1, 2) * $angka2;
                } else {
                    return 2 * M_PI * $angka1($angka2 + $angka3);
                }
                break;
            case 'bola':
                if ($pilihan == 'volume') {
                    return 4 / 3 * M_PI * pow($angka1, 3);
                } else {
                    return 4 * M_PI * pow($angka1, 2);
                }
                break;

            default:
                return "salah kamu asu";
                break;
        }
    }

    // $hasil = $angka1 * $angka2;

    echo "Nama Saya adalah " . $name . " hasilnya " .  hasilPerhitungan($angka1, $angka2, $angka3, $operator, $pilihan);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- di dalam tombol input ada step ="any" -->
<!-- untuk bisa dapat memberikan nilai menggunakan koma atau titik di dalam pemrograman -->

<body>
    <form action="" method="post">
        <label for="">Nama</label><br>
        <input type="text" name="name"><br>

        <label for="">Sisi / Panjang / jari-jari</label><br>
        <input type="number" name="angka1"><br>
        <label for="">Lebar</label><br>
        <input type="number" name="angka2"><br>
        <label for="">Tinggi</label><br>
        <input type="number" name="angka3"><br>
        <select name="operator" id="">
            <option value="kubus">Kubus</option>
            <option value="balok">balok</option>
            <option value="limas">limas</option>
            <option value="tabung">tabung</option>
            <option value="bola">bola</option>
        </select>
        <br>
        <span>Pilih Operasi</span>
        <select name="pilihan" id="">
            <option value="luas">luas</option>
            <option value="volume">volume</option>
        </select>
        <br>
        <br>



        <button type="submit" name="tampil">Tampilkan Data</button>
    </form>
</body>

</html>