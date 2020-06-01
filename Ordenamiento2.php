<?php

$num = readline("Ingrese numero: ");
$num1 = readline("Ingrese numero: ");
$num2 = readline("Ingrese numero: ");
$num3 = readline("Ingrese numero: ");
$datos = array($num, $num1, $num2, $num3);

sort($datos);
foreach($datos as $dat){
    echo "$dat ";
}