<?php
$number = 0;
$i = 0;


echo "Digite el numero a  multiplicar: ";
$number = readline();
while($i <= 30){
  $reasult = $number * $i;
  echo $number . " x " . $i . " = " . $reasult . "\n";
  $i++;
}
?>

  