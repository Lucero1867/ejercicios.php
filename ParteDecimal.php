<?php

$numero = readline("Ingrese un numero: ");
$entero = explode(".", $numero);
$decimal = "0." . $entero[1];

 
echo $decimal;
