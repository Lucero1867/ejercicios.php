<?php

function crear_espiral($n){
    $inicio = 0;
    $termino = $n - 1;
    $p_inicio = $termino / 2;
    $contador = 1;
    $matriz = [];
    
    while($contador <= ($n * $n)){
        // echo "$contador\n";
        for($i = $p_inicio; $i <= $p_inicio + 1; $i++){
            $matriz[$p_inicio] = [];
            // $matriz[$i] = [];
            $matriz[$p_inicio][$i] = $i;
            $contador++;
        }
        imprime_matriz($matriz);
        for($i = $p_inicio + 1; $i <= $termino - 1; $i++){
            $matriz[$i] = [];
            $matriz[$p_inicio + 1] = [];
            // print[];
            $contador++;
        }
        for($i = $termino - 1; $i >= $inicio + 1; $i--){
            $matriz[$termino - 1] = [];
            $matriz[$i] = [];
            $contador++;
        }
        for($i = $termino - 1;$i >= $inicio +1; $i--){
            $matriz[$i] = [];
            $matriz[$termino - 1] = [];
            $contador++;
        }
    
        $inicio = $inicio - 1;
        $termino = $termino + 1;
    }
    return $matriz;
}


function imprime_matriz($matriz){
    foreach($matriz as $array){
        // echo "- ";
        foreach($array as $valor){
            echo "$valor ";
        }
        echo "\n";
    }
}
$array = [
    [1,2,3,4,5,6],
    [1,2,3,4,5,6],
    [1,2,3,4,5,6],
    [1,2,3,4,5,6],
    [1,2,3,4,5,6],
    [1,2,3,4,5,6]
];

// imprime_matriz($array);
$espiral = crear_espiral(5);
imprime_matriz($espiral);

