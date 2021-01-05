<?php

$numero = readline("Cuantos primos: 10");
$posibleprimo = 0;
$primo = [];

for ($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= 10; $j++){
    
        if($j % $i == 0){
            $posibleprimo++;

            if($posibleprimo == 2){
                array_push($primo, $posibleprimo);
            }
        }
    }
    // echo "$i \n";
}


print_r($primo);


// while ($primos != $numero){

//     for($i = 1; $i <= $numero; $i++){
    
//         if($numero % $i == 0){
//             $posibleprimo++;
            
//             if ()
//         }
//     }
// }

// if($posibleprimo != 2){
//     echo "$numero es  compuesto";
// }
// else{
//     echo "$numero es primo";
// }