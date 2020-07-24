<?php

$rol= readline("Ingrese tu rut: ");

$text = (string)$rol;

$invertido = strrev($text);
$total = 0;

for ($i = 0; $i < strlen($invertido); $i++){
    $total += (($i % 6) + 2) * $invertido[$i];
}

$modulo = ($total % 11) - 11;

echo $rol . $modulo;
