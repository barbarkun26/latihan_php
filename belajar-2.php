<!-- penggunaan constanta dalam php -->
<?php
const email = "susi@gmail.com";
//  email = "udin@gmail.com";

echo email;


define("nama", "jefri");
echo "<br>";
echo nama;


// PENGGUNAAN ARRAY

$fruits = array("Apel", "Mangga", "Pisang"); // PENULISAN SINTAKS DULU
$cars = ["Toyota", "Honda", "BMW"]; // PENULISAN SINTAKS SEKARANG

var_dump($fruits);
echo "<br>";
var_dump($cars);
echo "<br>";

// nambah array pakai push
array_push($fruits, "Quldi", "Anggur");

foreach ($fruits as $key => $fruit) {
    echo "Aku mau Buah $fruit <br>";
};

echo $fruits[1];
echo "<br>";
// echo $fruits[3];


// ARRAY ASOSIATIVE
$motorcyles = [
    [
        'merek' => 'supra',
        'warna' => 'Hitam',
        'tahun' => 2019,
        'cc' => 125
    ],
    [
        'merek' => 'Vespa Matic',
        'warna' => 'Merah',
        'tahun' => 2026,
        'cc' => 150
    ],
    [
        'merek' => 'Yamaha',
        'warna' => 'Merah',
        'tahun' => 2023,
        'cc' => 125
    ]
];

var_dump($motorcyles);
echo "<br>";
foreach ($motorcyles as $key => $motorcyle) {

    // bisa juga dengan menggunakan if
    // if ($key != 2) {
    //     echo "
    //         <ul>
    //             <li>Nama Motor : " . $motorcyle['merek'] . " </li>
    //             <li>Warna Motor : " . $motorcyle['warna'] . " </li>
    //             <li>Tahun Motor : " . $motorcyle['tahun'] . " </li>
    //             <li>CC Motor : " . $motorcyle['cc'] . " </li>
    //         </ul>";
    // }

    echo "
            <ul>
                <li>Nama Motor : " . $motorcyle['merek'] . " </li>
                <li>Warna Motor : " . $motorcyle['warna'] . " </li>
                <li>Tahun Motor : " . $motorcyle['tahun'] . " </li>
                <li>CC Motor : " . $motorcyle['cc'] . " </li>
            </ul>";
}


echo $motorcyles[2]["cc"];


$nama = "rudi";
if ($nama == "Anto") {
    echo "salah";
} else {
    echo "benar";
}

$nilai = 100;
if ($nilai >= 90 && $nilai <= 100) {
    echo "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "B";
} elseif ($nilai < 80) {
    echo "C";
} else {
    echo "Kebanyakan ngab";
}


// cara lain dari if else (if tenary)
$hasil = ($nilai >= 90 && $nilai <= 100) ? 'A' : ($nilai >= 80 && $nilai <= 89 ? 'B' : ($nilai < 80 ? 'C' : "Nilai tidak diketahui"));


echo $hasil;


echo "<br>";
// pakai switch
$warna = "pink";
switch ($warna) {
    case 'biru':
        echo "salah bro, ini warna biru";
        break;
    case 'orange':
        echo "salah bro, ini warna orange";
        break;
    case 'hijau':
        echo "Nice One bro, ini warna hijau";
        break;

    default:
        echo "warna apaan tuh ! 👀";
        break;
}

echo "<br>";

// LOOPING FOR = struktur kode yang digunakan untuk menjalankan blok kode selama kondisi tertentu terpenuhi
// for, while, do..while

// FOR
for ($i = 1; $i <= 15; $i++) {
    echo "saya seorang pelajar di PPKD Jakarta Pusat $i", "<br>";
}


// WHILE
$a = 1;
while ($a <= 10) {
    echo "ini angka ke-$a", "<br>";
    $a++;
}

// DO..WHILE ( dia lakukan dulu baru liat kondisinya)
$b = 1;
do {
    echo "Halo ke-$b", "<br>";
    $b++;
} while ($b <= 20);
