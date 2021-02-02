<?php

$min = 0;
$max = 100;
$numero = round(($min + $max) / 2);

$i = 0;
$menor = "<";
$mayor = ">";
$igual = "=";
$respuesta = "";

while ($respuesta != $igual){
    $i++;
    echo "Intento $i: $numero\n";
    $respuesta = readline("");

    if ($respuesta == $menor){
        $max = $numero;
        $numero = round(($min + $max) / 2);
    }
    elseif ($respuesta == $mayor){
        $min = $numero;
        $numero = round(($min + $max) / 2);
    }
    elseif ($respuesta == $igual){
        echo "Adivine en $i intentos.";
    }
}