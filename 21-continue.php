<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
echo "<br>";
echo "<br>";
// menampilkan bilangan ganjil
for ($counter = 1; $counter <= 10; $counter++) {
 // 1 % 2 = 1
 if ($counter % 2 == 0) {
 continue;
 }
 echo "Hello Continue : $counter ,";
}