<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
echo "<br>";
echo "<br>";
$counter = 1;
while (true) {
 echo "Ini adalah for while ke-$counter <br>";
 $counter++;
 if ($counter > 10) {
 break;
 };
}