<?php

$numero = readline("Ingrese número par: ");

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

function lista_numeros($numero){
    for($i = 2; $i < $numero; $i++){
        for($j = $numero; $j >= $i; $j--){
            if(es_primo($i) && es_primo($j) && $i + $j == $numero){
                echo "$i + $j \n";
                break;
            }
        }
    }
}

lista_numeros($numero);
