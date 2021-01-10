<?php

$numero = readline("Contar primos menores que: ");

function contador_primos($numero){
    $contador = 0;
    for($i = 2; $i <= $numero; $i++){
        if(es_primo($i)){
            $contador++;
        }
    }
    return $contador;
}

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

$star = microtime(true);
$contador = contador_primos($numero);
$end = microtime(true);
$time = $end - $star;

echo "Hay $contador primos menores que $numero y se demoro $time";
