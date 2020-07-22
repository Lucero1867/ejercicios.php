<?php

function factorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
}

function potenciaFactorial($numero, $potencia){

  $resultado = 1;
  
  for($i = 0; $i < $potencia; $i++){
    $resultado *= $numero + $i; //$resultado = $resulado * ($numero + $i)
  }
  return $resultado;
}

//echo potenciaFactorial(3, 6);


function binomial($n, $k){
  $resultado = 1;
  
  for($i = 0; $i <= $k + 1; $i++){
    $resultado *= $n - $i; //$resultado = $resulado * ($numero - $i)
    // echo "$resultado ";
  }
  $division = $resultado / factorial($k);
  return $division;
}

// echo binomial(6,4);

function stirling($n, $k){
  $resultado1 = 1/ factorial($k);
  $resultado2 = 1;
  for($i = 0; $i <= $k; $i++){

    $parte1 = pow(-1, $i);
    $parte2 = binomial($k, $i);
    $parte3 = pow($k - $i, $n);
    $resultado2 += $parte1 * $parte2 * $parte3;

  }
  return $resultado1 * $resultado2;
}

echo stirling(3, 3);