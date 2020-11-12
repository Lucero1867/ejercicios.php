<?php

$cantidad = readline("Cantidad de número: ");
$h = 0;

for ($i = 1; $i <= $cantidad; $i++){
    $numero = readline("n$i: ");
    $h = $h + 1/$numero;
}

$H = $cantidad / $h ;
echo "H: $H";