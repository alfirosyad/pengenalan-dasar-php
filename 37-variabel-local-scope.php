<?php
include 'menu.php';

function createName()
{
  $name = "Eko"; // local scope
}
createName();
echo $name . PHP_EOL; // ini akan error