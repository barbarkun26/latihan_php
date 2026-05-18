<?php

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
if (isset($_POST['tampil'])) {
    $name = $_POST['name'];
    $angka1 = floatval($_POST['angka1'] ?? 0);
    $angka2 = floatval($_POST['angka2'] ?? 0);
    $angka3 = floatval($_POST['angka3'] ?? 0);
    $pilihan = floatval($_POST['pilihan'] ?? 0);
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
                }
                break;
            case 'bola':
                return $angka1 - $angka2;
                break;

            default:
                return "salah kamu asu";
                break;
        }
    }

    // $hasil = $angka1 * $angka2;


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
        <label for="">Number 1</label><br>
        <input type="number" name="angka1"><br>
        <label for="">Number 2</label><br>
        <input type="number" name="angka2"><br>
        <label for="">Number 3</label><br>
        <input type="number" name="angka3"><br>
        <select name="operator" id="">
            <option value="kubus">Kubus</option>
            <option value="balok">balok</option>
            <option value="limas">limas</option>
            <option value="tabung">tabung</option>
            <option value="bola">bola</option>
        </select>
        <select name="pilihan" id="">
            <option value="luas">luas</option>
            <option value="volume">volume</option>
        </select>


        <button type="submit" name="tampil">Tampilkan Data</button>
    </form>
</body>

</html>