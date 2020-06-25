<?php

$contador = 0;
$suma = 0;

for($i = 2 ; $i <= 100000; $i *= 2){
    $contador++;
    $fraccion = 1/$i;
    $suma = $suma + $fraccion;

    if(strlen("$fraccion") >= 7){
        $sep = "\t";
    }
    else {
        $sep = "\t\t";
    }

    echo "\n";
    echo "$contador\t";
    echo "$fraccion $sep";
    echo "$suma\t";
}
