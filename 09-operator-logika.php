<?php
include "menu.php";

$bilangan_a = 20;
$bil_b = 1;

//logika if
// and && kedua nilai harus bernilai TRUE
if ($bilangan_a == 20 && $bil_b = 1) {
  //body bernilai TRUE
  echo "Nilai benar";
  echo "<br>";
} else {
  //body bernilai FALSE
  echo "Nilai salah";
  echo "<br>";
}

//logika if
if ($bilangan_a == 2 || $bil_b == 2) {
  echo "Nilai benar";
  echo "<br>";
} else {
  echo "Nilai salah";
  echo "<br>";
}


$bilangan_a = 2;
$bil_b = 2;

//karena nilai disalah satu bernilai benar
if ($bilangan_a == 2 || $bil_b == 1) {
  echo "Nilai benar";
  echo "<br>";
} else {
  echo "Nilai salah";
  echo "<br>";
}


$bilangan_a = 2;
$bil_b = 2;

//jika salah satu saja yang benar, jika ada dkedua vriabel yang benar maka salah
if ($bilangan_a == 2 xor $bil_b == 2) {
  echo "Nilai benar";
  echo "<br>";
} else {
  echo "Nilai salah";
  echo "<br>";
}

$bilangan_a = false;

//jika salah satu saja yang benar, jika ada dkedua vriabel yang benar maka salah
if (!$bilangan_a) {
  echo "Nilai benar";
  echo "<br>";
} else {
  echo "Nilai salah";
  echo "<br>";
}


// perbandingan if elseif elseif
$nilai = 60;
$absen = 60;

if ($nilai >= 80 && $absen >= 80) {
  $hasil = "Nilai Kamu A";
} elseif ($nilai >= 70 && $absen >= 70) {
  $hasil = "Nilai Kamu B";
} elseif ($nilai >= 60 && $absen >= 60) {
  $hasil = "Nilai Kamu C";
} elseif ($nilai >= 50 && $absen >= 50) {
  $hasil = "Nilai Kamu D";
}

echo "<br>";
echo $hasil;








