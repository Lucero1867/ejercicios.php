<?php
$anno = readline("Ingrese su año: ");
if ($anno % 4 ==0 or ($anno % 100==0 && $anno % 400==0)){
    echo "$anno es bisiesto";
}else{
    echo "$anno no es bisiesto";
}