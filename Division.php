<?php

$dividendo = readline("Dividendo: ");
$divisor = readline("Divisor: ");
if($dividendo % $divisor ==0){
    echo "La divion es exacta \n";
}else{
    echo"La division no es exacta\n";
}
 $cuociente = floor($dividendo / $divisor);
 $resto = $dividendo % $divisor;
 
 echo "Cuociente: $cuociente \n";
 echo "resto: $resto \n";