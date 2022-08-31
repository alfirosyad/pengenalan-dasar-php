<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
echo "<br>";
echo "<br>";
// pembuatan variabel
$counter = 1;
do {
 echo "Hello do while loop : " . $counter . "<br>";
 $counter++;
} while ($counter <= 10);
echo "<br>";
echo "<br>";
// pembuatan variabel
$counter = 100;
//do while minimal menampilkan 1 data. meskipun data diawal kondisinya bernilai false(salah)
do {
 echo "Hello do while loop : " . $counter . "<br>";
 $counter++;
} while ($counter <= 10);