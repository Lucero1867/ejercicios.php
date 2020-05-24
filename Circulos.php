<?php

$pi = 3.14159265359;
$radio = readline("Ingrese el radio: ");
$perimetro = round(2 * $pi * $radio, 1);
$area = round($pi * pow($radio, 2), 1); 

echo "Perimetro: $perimetro\n";
echo "Área: $area";
