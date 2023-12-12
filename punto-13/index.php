<?php
$numberArray = array(5, 1, 8, 9, 2);
$sum = 0;

foreach($numberArray as $number) {
  $sum += $number;
}
echo "La suma total del arreglo es: " . $sum;
?>
