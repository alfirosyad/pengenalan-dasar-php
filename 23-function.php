<?php
include 'menu.php';
$buat = true;
function sayHelloWorld()
{
  echo "Hello Function" . PHP_EOL;
}
if ($buat) {
  function sayHello()
  {
    echo "Hello Function" . PHP_EOL;
  }
}
sayHelloWorld();
sayHello();
sayHello();
sayHello();
sayHello();
