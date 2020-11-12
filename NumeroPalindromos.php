<?php

$numero = readline("Ingrese número de 5 dígitos: ");

if (strrev($numero) == $numero){
    echo "$numero es palindromo";
}
else {
    echo "$numero no es palindromo";
}