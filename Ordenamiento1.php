<?php

$num = readline("Ingrese numero: ");
$num1 = readline("Ingrese numero: ");
$num2 = readline("Ingrese numero: ");
$conjunto = array($num, $num1, $num2);

sort($conjunto, SORT_NUMERIC);

foreach ($conjunto as $key){
    echo " $key";
}