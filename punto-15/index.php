<?php
include "./operationUtils.php";

$numberOne = 0;
$numberTwo = 0;
$option = "";

$numberOne = getNumber();
$numberTwo = getNumber();

$option = showMenu();

$result = operate($numberOne, $numberTwo, $option);

echo "El resultado es: " . $result . "\n";
?>


<?php
function getNumber(){
  echo "Ingrese el numero a operar \n";
  return readline();
 }
function showMenu(){
  echo "Ingrese la operacion a realizar \n";
  echo "1. Suma \n";
  echo "2. Resta \n";
  echo "3. Multiplicacion \n";
  echo "4. Division \n";
  return readline();
}
function operate($x, $y, $option) {
  switch($option){
    case 1:
    return add($x, $y);
    case 2:
    return sub($x, $y);
    case 3:
    return dot($x, $y);
    case 4:
    return split($x, $y);
    defaul:
    echo "Opcion no valida \n";
    return 0; 
      }
    }
function add($x, $y){
  return $x + $y;
}
function sub($x, $y){
  return $x - $y;
}
function dot($x, $y){
  return $x * $y;
}
function split($x, $y){  
  return $x / $y;
}
?>