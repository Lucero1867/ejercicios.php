<?php
//triangulo

$altura = readline("Altura: ");

for($i = 1; $i <= 4; $i++){
    
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "\n";
}