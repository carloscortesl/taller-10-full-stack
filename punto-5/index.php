<?php
const TICKET = "25000";
$number_person ="0";
$tipe_afiliacion = " ";

echo "Ingrese el numero de personas que ingresaran a bolera \n";
$number_person = readline ();

echo " Ingrese el tipo de afiliacion A o B \n";
$tipe_afiliacion = readline ();

$total_page = $number_person * TICKET;

if ($tipe_afiliacion == "A" || $tipe_afiliacion == "B")
{$total_page = $total_page * 0.7;}

echo "El total a pagar es: $total_page \n";
