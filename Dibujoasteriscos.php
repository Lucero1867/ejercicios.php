<?php
//Rectángulo

$altura = readline("Altura: ");
$ancho = readline("Ancho: ");


for($i = 1; $i <= $altura; $i++){
    
    for($x = 1; $x <= $ancho; $x++){
        echo "*";

    }
    echo "\n";
}