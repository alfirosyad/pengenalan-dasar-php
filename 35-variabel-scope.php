<?php
include 'menu.php';
$name = "Eko"; // global scope
$dataOrang = [1, 2, 3, 4];
function sayHello()
{
  global $name; // global keyword
  echo $name . PHP_EOL;
  // echo $dataOrang[0] . PHP_EOL; /// ini error ya soalnya diluar scope dari function ini
  $dtTinggi = 100; // local scope
  echo $GLOBALS["name"] . PHP_EOL;
}
sayHello();
// echo $GLOBALS['dtTinggi']; // berhubung $dtTinggi dibuat di dalam scope maka dia tidak bisa. ini akan error