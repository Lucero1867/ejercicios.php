<?php

$numero = readline("Cuantos primos: ");

function es_primo($numero){
    $posibleprimo = 0;
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $posibleprimo++;
        }
    }
    return $posibleprimo == 2;
}

$contador = 0;
$i = 1;
do {
   
    if(es_primo(++$i)){
        $contador++;
        echo $i . "\n";
    }
    
} while($contador < $numero);




// for($i = 1; $i <= 50; $i++){
//     $es_primo = es_primo($i);
    
//     if($es_primo == true){
//         $contador++;
//         echo "$i\n";

//         if($contador == $numero){
//             break;
//         }
//     }
// }