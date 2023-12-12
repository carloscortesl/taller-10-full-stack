<?php
$number = 0;
for ($i = 1; $i <= 100; $i = $i + 2) {
echo $i . "\n";
  $number = $number + $i;
}
echo "La suma de los números impares del 1 al 100 es: " . $number;
?>