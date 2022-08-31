<?php
include 'menu.php';
$data = "Eko";
// $data = [1,2,3];
// $data = true;
// $data = 1.32;

var_dump(is_string($data));
echo "<br>";
var_dump(is_bool($data));
echo "<br>";
var_dump(is_int($data));
echo "<br>";
var_dump(is_float($data));
echo "<br>";
var_dump(is_array($data));
echo "<br>";
var_dump(is_null($data));
echo "<br>";
