<?php

function caballo($fila, $columna){
    $posiciones = [
        [$fila - 1, $columna + 2],
        [$fila - 1, $columna - 2],
        [$fila - 2, $columna - 1],
        [$fila - 2, $columna + 1],
        [$fila + 1, $columna + 2],
        [$fila + 1, $columna - 2],
        [$fila + 2, $columna - 1],
        [$fila + 2, $columna + 1],

    ];

    for ($i = 0; $i <= 7; $i++){
        if ($posiciones[$i][0] < 1 || $posiciones [$i][0] > 8 && $posiciones[$i][1] < 1 || $posiciones[$i][1] > 8){
            unset($posiciones[$i]);

        }
        
    }
   return $posiciones;

}
echo "Ingrese coordenadas del caballo\n";
$fila = readline("Fila: ");
$columna = readline("Columna: ");

if ($fila > 8 || $columna >8){
    echo "Posición invalida.";
}


$caballos = caballo($fila, $columna);
// print_r($caballo);

echo "El caballo puede saltar de $fila a $columna: \n";

foreach($caballos as $caballo){
    echo $caballo[0] . " - " . $caballo[1] . "\n";
}