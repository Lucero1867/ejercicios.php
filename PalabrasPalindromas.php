<?php

$palabra = readline("Ingrese palabra: ");


if (strrev($palabra) == $palabra){
    echo "$palabra es palindromo";
}
else {
    echo "$palabra no es palindromo";
}