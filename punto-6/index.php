<?php
$nomber = " ";
$age = 0;

echo "Ingrese su nombre: ";
$nomber = readline();
echo "Ingrese su edad: ";
$age = readline();

if ($age >= 18) {
  echo "Hola " . $nomber . "usted es mayor de edad";}
else {
  echo "Hola " . $nomber . "usted es menor de edad";}
?>