<?php

$a = readline("Ingrese a: ");
$b = readline("Ingrese b: ");



if ($a == 0 && $b == 0) {
    echo "Infinita solución";
} 
elseif ($a == 0){
    echo "Sin solución";
} 
else {
    $x = 0 - $b / $a;
    echo "Solución única:". $x;
}