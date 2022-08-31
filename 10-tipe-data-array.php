<?php
include "menu.php";

echo "<pre>";
$names = ["muhammad" , "zuz" , "ubaidillah"];
var_dump($names[0]);
$names[0] = "Budi";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "Eko";
var_dump($names);
var_dump(count($names));