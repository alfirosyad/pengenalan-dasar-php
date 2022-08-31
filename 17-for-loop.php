<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
for ($counter = 1; $counter <= 10; $counter++) {
 echo "Ini adalah for loop ke-$counter" . "<br>";
}
for ($counter = 10; $counter >= 1; $counter--) {
 echo "Ini adalah for loop ke-$counter" . "<br>";
}
echo "<br>";
echo "<br>";
$data_hewan = ['Gajah', 'harimau', 'Lumba-lumba', 'Zebra', 'Unta'];
for ($i = 0; $i < count($data_hewan); $i++) {
 echo "Ini adalah nama Hewan " . $data_hewan[$i] . "<br>";
}
echo "<br>";
echo "<br>";
// ini array Associative
$data_hewan = [
 [
 "nama" => 'Gajah',
 "ukuran" => 'besar',
 ],
 [
 "nama" => 'harimau',
 "ukuran" => 'kecil',
 ]
];
for ($i = 0; $i < count($data_hewan); $i++) {
 echo "Ini adalah nama Hewan " . $data_hewan[$i]['nama'] . "<br>";
 echo "dengan ukuran : " . $data_hewan[$i]['ukuran'] . "<br>";
}
echo "<br>";
echo "<br>";


