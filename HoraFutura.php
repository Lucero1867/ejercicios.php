<?php

$dia = 24;
$actual = readline("Hora actual:  ");
$cantidad = readline("Cantidad de horas: ");
$resultado = (($cantidad % $dia) + $actual) % $dia;

echo "En $cantidad horas, el reloj marcara las $resultado";
