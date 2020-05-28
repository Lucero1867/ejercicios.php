<?php

$c1 = readline("Ingrese nota certamen 1: ");
$c2 = readline("Ingrese nota certamen 2: ");
$nc = ($c1 + $c2)/3;
$lab = readline("Ingrese nota laboratorio: ");
$nf = ($nc * 0.7) + ($lab * 0.3);
$nc3 = floor((60 - $nf)/0.7)*3;

echo "Necesita nota $nc3 en el certamen 3";