<?php
include "menu.php";
?>

<?php
//mencetak nilai langsung
echo "Ini string <br>";

//mencetak nilai variabel
$nama = "CodePolitan";
$tahun = 2014;
echo "$nama berdiri pada taun $tahun <br>";
//mencetak echo dengan nilai variabel
$nama = "CodePolitan";
$tahun = 2014;
$hasil = "$nama berdiri pada taun $tahun <br>";
echo $hasil;

//mencetak menggunakan petik
$nama = "CodePolitan";
$tahun = 2014;
echo $nama .'berdiri pada tahun' .$tahun. '<br>';
