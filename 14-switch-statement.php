<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
define("ENTER", "<br>");
$nilai = "E";
switch ($nilai) {
 case "A":
    echo "Anda lulus dengan sangat baik" . ENTER;
    break;
 case "B":
 case "C":
    echo "Anda lulus" . ENTER;
    break;
 case "D":
    echo "Anda tidak lulus" . ENTER;
    break;
 default:
    echo "Mungkin Anda salah jurusan" . ENTER;
}
// alternatif
switch ($nilai):
 case "A":
    echo "Anda lulus dengan sangat baik" . ENTER;
    break;
 case "B":
 case "C":
    echo "Anda lulus" . ENTER;
    break;
 case "D":
    echo "Anda tidak lulus" . ENTER;
    break;
 default:
    echo "Mungkin Anda salah jurusan" . ENTER;
 endswitch;