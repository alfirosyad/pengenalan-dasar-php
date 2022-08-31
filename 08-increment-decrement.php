<?php
include "menu.php";

//kode increment-decrement yang sudah sederhana
$x = 10;
echo $x--; //9
echo "<br>";
echo $x++; //11
echo "<br>";

//kode dibwah ini termasuk increment-decrement tetapi masih belum sederhana
$x = 20;
echo $x += 1;
echo "<br>";
echo $x = $x + 1;
echo "<br>";