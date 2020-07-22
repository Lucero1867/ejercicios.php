<?php

$num = readline("Ingrese n: ");
$num1 = readline("Ingrese número: ");
$num2 = readline("Ingrese número: ");
$num3 = readline("Ingrese número: ");
$num4 = readline("Ingrese número: ");

$contador = ["$num", "$num1", "$num2", "$num3", "$num4"];

echo "El mayor es ";
echo  max($contador);