<?php


function factorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
}
$suma = 0;
$contador = 0;

do{
    $suma = $suma + 1/factorial($contador++);
  
} while(1/factorial($contador) > 0.0001);

echo "$suma";





