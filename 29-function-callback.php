<?php
include 'menu.php';
function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
}
sayHello("Eko", "strtoupper");
echo "<br>";
sayHello("Eko", "strtolower");
echo "<br>";
sayHello("Eko", function (string $name): string {
  return strtoupper($name);
});
echo "<br>";
sayHello("Eko", fn ($name) => strtoupper($name));
