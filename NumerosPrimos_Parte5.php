<?php

$numero_entero = readline("Ingrese numero: ");

function es_primo($numero){
    $posibleprimo = 0;
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $posibleprimo++;
        }

        if($posibleprimo > 2){
            return false;
        }
    }
    return true;
}


$i = 2;
$resultado = $numero_entero;

while ($resultado > 1){
    if(es_primo($i) && $resultado % $i == 0){
        echo "$i \n";
        $resultado = $resultado / $i;
        continue;
    }
    $i++;
}
