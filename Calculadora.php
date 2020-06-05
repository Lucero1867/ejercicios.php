<?php

$num1 = readline("Operando: ");
$operador = readline("Operador: ");
$num2 = readline("Operando: ");

if($operador == "+"){
    $resultado = $num1 + $num2;
    echo "$num1 + $num2 = $resultado";
}elseif($operador == "-"){
    $resultado = $num1 - $num2;
    echo "$num1 - $num2 = $resultado";
}elseif($operador == "*"){
    $resultado = $num1 * $num2;
    echo "$num1 * $num2 = $resultado";
}elseif($operador == "/"){
    $resultado = $num1 / $num2;
    echo "$num1 / $num2 = $resultado"; 
}else{
    $resultado = $num1 ** $num2;
    echo "$num1 ** $num2 = $resultado";
}