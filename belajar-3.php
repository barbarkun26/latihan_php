<!-- FUNCTION PHP -->

<?php
// function : blok kode yang diberi nama, yang bisa dipanggil kapan saja untuk menjalankan tugas tertentu
// menghindari perulangan kode (code reuse), memecah logika menjadi bagian terkecil
// - array_push(), substr(), strln(), str_word_count(), ucfirst()

function namaAnda($nama, $usia)
{
    return "Nama anda adalah $nama, usia Anda adalah $usia tahun <br>";
}

echo namaAnda("saipul", 20);
echo namaAnda("rudi", 2);
echo namaAnda("jamal", 25);
echo "<br>";


$stringName =  "saya sedang belajar pemrograman dasar pada bahasa pemrograman PHP";
echo substr($stringName, 5);
echo "<br>";
echo strlen($stringName);
echo "<br>";
echo str_word_count($stringName);
echo "<br>";
echo ucfirst($stringName);
echo "<br>";
echo ucwords($stringName);

?>