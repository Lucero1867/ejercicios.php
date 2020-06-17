<?php

$num = readline("Ingrese su numero: ");
$potencia = pow($num, 2);

for($i = 0; $i <= 10; $i++){
    $potencia = pow($num, $i);
    echo "$potencia ";
}