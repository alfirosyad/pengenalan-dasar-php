<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
$data = [];
// versi terlalu panjang
if (isset($data['action'])) {
 $action = $data['action'];
} else {
 $action = "Nothing";
}
echo $action . "<br>";
echo "<br>";
echo "<br>";
$data = [
 "action" => "Create"
];
$action = $data["action"] ?? "Nothing";
echo $action . "<br>";