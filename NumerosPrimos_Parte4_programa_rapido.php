<?php 

$numero = readline("Contar primos menores que: ");

function contador_primos($numero){
    $resultados = round($numero / log($numero) * 1.08366);
    return $resultados;
}

$star = microtime(true);
$contador = contador_primos($numero);
$end = microtime(true);
$time = $end - $star;

$contador = contador_primos($numero);
echo "Hay $contador primos menores que $numero y se demoro $time";


