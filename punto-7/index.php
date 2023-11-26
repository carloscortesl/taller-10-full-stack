<?php
$number_1 = 0;
$number_2 = 0;
$operation = 0;
$result = 0;

echo "Elija la operacion\n";

echo "a - suma\n";
echo "b - resta\n";
echo "c - multiplicacion\n";
echo "d - division\n";

$operation = readline();
$number_1 = readline("Ingrese el primer numero: ");
$number_2 = readline("Ingrese el segundo numero: ");

switch($operation){
  case "a - suma":
    $result = $number_1 + $number_2;
    echo "El resultado es: ".$result;  
    break;
  case "b - resta":
    $result = $number_1 - $number_2;  
    echo "El resultado es: ".$result;
    breaK;
  case "c - multiplacacion":
    $result = $number_1 * $number_2;
    echo "El resultado es: ".$result;  
    break;
  case "d - division":
    $result = $number_1 / $number_2;
    echo "El resultado es: ".$result;  
    break;
defalt:
    echo "Operacion no valida";
    }
?>