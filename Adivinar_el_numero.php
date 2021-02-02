<?php

readline("Adivine el numero.");
$numero = rand(0, 100);

$i = 0;
$respuestas = 1;

while ($respuestas != $numero){
    $i++;
    $respuestas = readline("Intento $i: ");
    if ($numero < $respuestas){
        echo "Es menor que $respuestas \n";
    }
    elseif ($numero > $respuestas){
        echo "Es mayor que $respuestas \n";
    }
    elseif ($numero == $respuestas){
        echo "Correcto. Adivinaste en $i intentos.";
    }
}