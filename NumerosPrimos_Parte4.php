<?php 

$numero = readline("Contar primos menores que: ");

function es_primo($numero){
    $posibleprimo = 0;
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
             $posibleprimo++;
        }
    }
    return $posibleprimo == 2;
}

$contador = 0;
for($i = 1; $i < $numero; $i++){
    if(es_primo($i)){
        $contador++;
    }
}

echo "Hay $contador primos menores que $numero";