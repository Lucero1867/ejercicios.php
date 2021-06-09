<?php

function print_producto($producto) {
    foreach($producto as $llave => $valor) {
        foreach($valor as $llave1 => $valor1) {
            echo "$valor1 ";
        }
        echo "\n";
    }
}

$producto = [];

for ($i = 1; $i <= 10; $i++){
    $producto[$i] = [];
    for ($j = 1; $j <= 10; $j++){
        $producto[$i][] = $i * $j;
    }
}

print_producto($producto);

?>