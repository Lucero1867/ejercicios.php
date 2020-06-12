<?php

$a = readline("Ingrese a: ");
$b = readline("Ingrese b: ");
$c = readline("Ingrese c: ");

//En todo triángulo la suma de las longitudes de dos lados cualesquiera 
//es siempre mayor a la longitud del lado restante.

if(($a + $b) < $c || ($c + $a) < $b || ($c + $b) < $a){ 
    echo "No es un triangulo";
}
elseif($a == $b && $a == $c && $b == $c){
     echo "El triangulo es equilatero";
}
elseif($a == $b || $a == $c || $b == $c){
     echo "Es triangulo Isoceles";
}
else{
    echo "El triangulo es escaleno";
    }

