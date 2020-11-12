<?php

echo "Ingrese coordenadas del caballo\n";
$fila = readline("Fila: ");
$columna = readline("Columna: ");


function caballo($fila, $columna){
    $totalc1 = $columna + 2; 
    $totalf1 = $fila - 1;

    $totalc2 = $columna - 2; 
    $totalf2 = $fila - 1;

    $totalc3 = $columna - 1; 
    $totalf3 = $fila - 2;

    $totalc4 = $columna + 1; 
    $totalf4 = $fila - 2;
   
    $totalc5 = $columna + 2; 
    $totalf5 = $fila + 1;

    $totalc6 = $columna - 2; 
    $totalf6 = $fila + 1;

    $totalc7 = $columna - 1; 
    $totalf7 = $fila + 2;

    $totalc8 = $columna + 1; 
    $totalf8 = $fila + 2;

    echo "$totalf1 $totalc1\n";
    echo "$totalf2 $totalc2\n";
    echo "$totalf3 $totalc3\n";
    echo "$totalf4 $totalc4\n";
    echo "$totalf5 $totalc5\n";
    echo "$totalf6 $totalc6\n";
    echo "$totalf7 $totalc7\n";
    echo "$totalf8 $totalc8\n";

    
}

caballo($fila, $columna);

// $posiciones = [
//     [2 , $totalc1],
//     [$totalf2 , $totalc2],
//     [$totalf3 , $totalc3],
//     [$totalf4 , $totalc4],
//     [$totalf5 , $totalc5],
//     [$totalf6 , $totalc6],
//     [$totalf7 , $totalc7],
//     [$totalf8 , $totalc8],
    
// ];

// print_r($posiciones);

// if ($fila >= 9 or $columna >= 9){
//     echo "Posición invalida.";

// } elseif ($fila <= 8 and $columna <= 6){ 
//     $totalc = $columna + 2; 
//     $totalf = $fila - 1;
//     echo "$totalf  $totalc";

// } elseif ($fila <= 8 and $columna <= 8){
//     $totalc = $columna - 2; 
//     $totalf = $fila - 1;
//     echo "$totalf  $totalc";

// } elseif ($fila <= 8 and $columna <= 8){
//     $totalc = $columna - 1; 
//     $totalf = $fila - 2;
//     echo "$totalf  $totalc";

// } elseif ($fila <= 8 and $columna <= 7){
//     $totalc = $columna + 1; 
//     $totalf = $fila - 2;
//     echo "$totalf  $totalc";

// } elseif ($fila <= 7 and $columna <= 6){
//     $totalc = $columna + 2; 
//     $totalf = $fila + 1;
//     echo "$totalf  $totalc";

// } elseif ($fila <= 7 and $columna <= 8){
//     $totalc = $columna - 2; 
//     $totalf = $fila + 1;
//     echo "$totalf  $totalc";

// } elseif ($fila <= 6 and $columna <= 8){
//     $totalc = $columna - 1; 
//     $totalf = $fila + 2;
//     echo "$totalf  $totalc";

// } elseif ($fila <= 8 and $columna <= 7){
//     $totalc = $columna + 1; 
//     $totalf = $fila + 2;
//     echo "$totalf  $totalc";
// }