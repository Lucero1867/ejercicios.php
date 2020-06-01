<?php

$palabra1 = readline("Palabra1:\n");
$palabra2 = readline("Palabra2:\n");
$objeto1 = strlen($palabra1);
$objeto2 = strlen($palabra2);
$resta = abs($objeto1 - $objeto2);

if($objeto1 < $objeto2){
    echo "La palabra $palabra2 tiene $resta letras  mas que $palabra1";
}elseif($objeto1 == $objeto2){
    echo "Las dos palabras tienen el mismo largo";
}else{
    echo "La palabra $palabra1 tiene $resta letras mas que $palabra2";
}
    


