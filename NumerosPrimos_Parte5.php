<?php

$numero_entero = readline("Ingrese numero: ");

function es_primo($numero_entero){
    $posibleprimo = 0;
    for($i = 1; $i <= $numero_entero; $i++){
        if($numero_entero % $i == 0){
            $posibleprimo++;
        }
    }
    return $posibleprimo == 2;
}

$divisiores = 0;

for($i = 2; $i <= $numero_entero; $i++){
    $resultado = es_primo($i) / $numero_entero;
        echo "$i";
        // $divisores++;
        // echo $divisores . "\n";
    
}
