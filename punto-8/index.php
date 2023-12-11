<?php
$membertype = " ";
$numberPerson = 0;
const TICKET_PRICE = 25000;

echo "Ingresa el tipo de membresia\n";
$membertype = strtoupper (readline());
echo "Ingresa el numero de personas\n";
$numberPerson = readline();
$totalPay = $numberPerson * TICKET_PRICE;
switch ($membertype) {
  case "A":
  $totalPay = $totalPay * 0.7;
  break;
  case "B":
  $totalPay = $totalPay * 0.75;
  break;
  case "C":
  $totalPay = $totalPay * 0.9;
  breaK;
  case "D":
  $totalPay = $totalPay * 0.95;
  break;
  default:
  echo "Tipo de membresia no valido\n";
}
echo "El total a pagar es: " . $totalPay;
?>