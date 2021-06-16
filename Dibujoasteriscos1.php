<?php
//triangulo

$altura = readline("Altura: ");

for($i = 1; $i <= $altura; $i++){
    
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "\n";
}