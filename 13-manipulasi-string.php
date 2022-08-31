<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
// dot operator
$name = "Mohammad Zuz Ubaidillah";
echo "Nama : " . $name . "<br>";
echo "Nilai : " . 100 . "<br>";

echo "<br>";
echo "<br>";
// konversi ke number dan sebaliknya
$nilai_string = (string)100;
var_dump($nilai_string);
echo "<br>";
$nilai_number = 200;
$nilai_string = (string)$nilai_number;
var_dump($nilai_string);
echo "<br>";
$nilai_number = "100";
$nilai_string = (int)$nilai_number;
var_dump($nilai_string);
echo "<br>";
$nilai_string = (float)"100.11";
var_dump($nilai_string);
echo "<br>";

// mengakses karakter
$name = "Zuz";
echo "Huruf pertama : " . $name[0];
echo "<br>";
echo "Huruf kedua : " . $name[1];
echo "<br>";
echo "Huruf ketiga : " . $name[2];
echo "<br>";
echo "<br>";

// variabel parsing
$name = "Zuz";
echo "Hello $name, Selamat Belajar";
echo "<br>";
echo "<br>";

// curly brace
$var = "Zuz";
$hasil = "This is {$var}s";
echo $hasil;
echo "<br>";
echo "<br>";

// heredoc
$nama_bapak = "Zuhdi";
echo <<<ZUZ
Saya adalah kamu, karena kita sama sama manusia.
dan orangtuamu adalah manusia. $nama_bapak
ZUZ;
echo "<br>";
echo "<br>";
$var = <<<KAMU
ini adalah contoh string yang sangat 
panjang, dan kamu nggak perlu ngetik ENTER
secara manual, $nama_bapak "bisa dobel quote" juga
KAMU;
echo $var;
echo "<br>";
echo "<br>";

// nowdoc
echo <<<'TEXT'
ini adalah contoh string yang sangat 
panjang, dan kamu nggak perlu ngetik ENTER
secara manual, $nama_bapak "bisa dobel quote" juga
TEXT;