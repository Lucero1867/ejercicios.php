<?php

$caracter = readline("Ingrese caracter: ");

if(is_numeric($caracter)){
    echo "Es numero.";
}elseif(ctype_upper($caracter)){
    echo "Es letra mayuscula.";
}elseif(ctype_lower($caracter)){
    echo "Es letra minuscula.";
}else{
    echo"No es letra ni numero.";
}
        
