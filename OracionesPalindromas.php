<?php

$oraciones = readline("Ingrese oración: ");

$sinespacio = str_replace($oraciones, " ", " ");

if (strrev($sinespacio) == $sinespacio){
    echo "Es palindromo";
}
else {
    echo "No es palindromo";
}