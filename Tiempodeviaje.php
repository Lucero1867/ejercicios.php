<?php

$time = 1;
$suma = 0;

while($time != 0){
    $time = readline("Duración tramo: ");
    $suma = $suma + $time;
    
}

$hora = floor($suma / 60);
$minuto = $suma % 60;
    
echo "Tiempo total de viaje: $hora : $minuto horas";