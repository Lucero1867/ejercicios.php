<?php

$suma = 0;

do {
    $time = readline("Duración tramo: ");
    $suma = $suma + $time;
    $hora = floor($suma / 60);
    $minuto = $suma % 60;

}while($time !=0);


echo "Tiempo total de viaje: $hora : $minuto horas";