<?php

$numero = readline("Ingrese un numero: ");
$posibleprimo = 0;

for($i = 1; $i <= $numero; $i++){

    if($numero % $i == 0){
        $posibleprimo++;
    }
}
if($posibleprimo != 2){
    echo "$numero es  compuesto";
}
else{
    echo "$numero es primo";
}

