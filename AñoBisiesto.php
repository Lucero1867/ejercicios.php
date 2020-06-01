<?php

$anno = readline("Ingrese su año: ");
if ($anno % 4==0 and $anno % 100!=0){
    echo "$anno si es año bisiesto";
}elseif($anno %100==0 and $anno %400==0){
    echo "$anno si es año bisiesto";
}else{
    echo "$anno no es año bisiesto";
}
    

    



