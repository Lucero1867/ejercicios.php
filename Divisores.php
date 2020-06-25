<?php

$num = readline("Ingrese numero: ");

for($i = 1; $i <= $num ;$i++){
    $resto = $num % $i;

    if($resto == 0){
        echo "$i ";
    }
    
}