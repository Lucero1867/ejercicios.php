<?php

$numero_entero = readline("Ingrese numero: ");

// for($i = 2; $i < $numero_entero; $i++){
//     // $resultado = $numero_entero / $i;
//     if (($numero_entero % $i) == 0){

//         echo "$i \n";
//         $i--;
//     }
// }
$i = 2;
$resulado = $numero_entero;

while ($i < $numero_entero){
    $i++;
    if(($numero_entero % $i)== 0){
        
        echo "$i \n";
    }
}
