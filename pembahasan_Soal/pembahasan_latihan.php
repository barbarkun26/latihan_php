<?php
include '../pembahasan_Soal/function.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="?bangun=kubus">Kubus</a>
    <a href="?bangun=balok">Balok</a>
    <a href="?bangun=limas">Limas Segi Empat</a>
    <a href="?bangun=tabung">Tabung</a>
    <a href=""></a>
    <form action="?bangun=<?php echo isset($_GET['bangun']) ? $_GET['bangun'] : '' ?>" method="post">
        <?php
        if (isset($_GET['bangun']) && $_GET['bangun'] == 'kubus') {
        ?>
            <label for="">Kubus</label>
            <input type="number" step="any" name="s">
        <?php
        } else if (isset($_GET['bangun']) && $_GET['bangun'] == 'balok') {
        ?>
            <label for="">Panjang</label>
            <input type="number" step="any" name="p">
            <label for="">Lebar</label>
            <input type="number" step="any" name="l">
            <label for="">Tinggi</label>
            <input type="number" step="any" name="t">
        <?php
        } else if (isset($_GET['bangun']) && $_GET['bangun'] == 'limas') {
        ?>
            <label for="">Sisi</label>
            <input type="number" step="any" name="s">
            <label for="">Tinggi</label>
            <input type="number" step="any" name="t">
        <?php
        } else if (isset($_GET['bangun']) && $_GET['bangun'] == 'tabung') {
        ?>
            <label for="">Sisi</label>
            <input type="number" step="any" name="r">
            <label for="">Tinggi</label>
            <input type="number" step="any" name="t">
        <?php
        }
        ?>

        <br>
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>
    <?php

    $bangun = $_GET['bangun'] ?? '';
    switch ($bangun) {
        case 'kubus':
            $s = $_POST['s'];
            $vol = volumeKubus($s);
            $lp = lpKubus($s);
            echo "Sisi = $s";
            echo "<strong>(s<sup>3</sup>) =" . round($vol, 2) . "</strong>";
            echo "<strong>(6 x s<sup>2</sup>) =" . round($lp, 2) . "</strong>";
            break;
        case 'balok':
            $p = $_POST['p'];
            $l = $_POST['l'];
            $t = $_POST['t'];
            $vol = volumeBalok($p, $l, $t);
            $lp = lpBalok($p, $l, $t);
            echo "Panjang = $p, <br> ";
            echo "Lebar = $l, <br>";
            echo "Tinggi = $t, <br>";
            echo "<strong>Volume(P X l X t ) =" . round($vol, 2) . "</strong>";
            echo "<strong>Luas (2((p*l)+(p*t)+(l*t)) =" . round($lp, 2) . "</strong>";
            break;
        case 'limas':
            $s = $_POST['s'] ?? 0;
            $t = $_POST['t'] ?? 0;
            $vol = volumeLimas($s, $t);
            echo "Sisi = $s <br>";
            echo "Tinggi = $t <br>";
            echo "<strong>(1/3 x Luas Alas x t) =" . round($vol, 2) . "</strong><br>";
            break;
        case 'tabung':
            $r = $_POST['r'] ?? 0;
            $t = $_POST['t'] ?? 0;
            $vol = volumeLimas($r, $t);
            echo "jari-jari = $r <br>";
            echo "Tinggi = $t <br>";
            echo "<strong>volume : (phi x r^2 x t) =" . round($vol, 2) . "</strong><br>";
            echo "<strong>Luas (4 x phi x r^2) =" . round($vol, 2) . "</strong><br>";
        default:
            # code...
            break;
    }

    ?>
</body>

</html>