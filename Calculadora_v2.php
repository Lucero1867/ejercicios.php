<?php

$operacion = readline("Ingrese operación:");
$limpia1 = preg_replace('/\s+/', ' ', $operacion);
$limpia2 = trim($limpia1);
$operadores = explode(' ', $limpia2);
// print_r($operadores);

$num1 = intval($operadores[0]);
$num2 = intval($operadores[2]);
$operador = $operadores[1];

function suma($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

function resta($num1, $num2){
    $resultado = $num1 - $num2;
    return $resultado;
}

function division($num1, $num2){
    if($num2 == 0){
        return "No se puede dividir entre cero";
    }
    $resultado = $num1 / $num2;
    return $resultado;
}

function multiplicacion($num1, $num2){
    $resultado = $num1 * $num2;
    return $resultado;
}

if($operador == "+"){

    echo suma($num1,$num2);

}elseif($operador == "-"){

    echo resta($num1,$num2);

}elseif($operador == "/"){

    echo division($num1,$num2);
    
}elseif($operador == "*"){

    echo multiplicacion($num1,$num2);
    
}else{

    echo"Esta operacion  es incorrecto";
}

?>