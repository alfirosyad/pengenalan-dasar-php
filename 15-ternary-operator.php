<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
$gender = "PRIA";
// versi terlalu panjang
if ($gender == "PRIA") {
 $hi = "Hi Bro!";
} else {
 $hi = "Hi Nona!";
}
echo $hi . "<br>";
// versi singkat
$hi = $gender == "PRIA" ? "Hi bro!" : "Hi nona!";
echo $hi . "<br>";