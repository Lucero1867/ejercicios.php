<?php
$pulgada = 0.393701;
$longitud = readline("Ingrese longitud: ");
$resultado = round($longitud * $pulgada, 4);

echo "$longitud cm =  $resultado in";