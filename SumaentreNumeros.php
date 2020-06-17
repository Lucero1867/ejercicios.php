<?php

$num = readline("Ingrese numero: ");
$num1 = readline("Ingrese numero: ");

$suma = 0;

for($i = $num + 1 ; $i <= $num1 - 1 ; $i++){
   //$suma = $suma + $i ; 
   $suma += $i;
   
}

echo "La suma es $suma";