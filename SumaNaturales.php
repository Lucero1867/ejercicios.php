<?php

$num = readline("Ingrese n: ");

$suma = 0;
$s2 = ($num * ($num + 1) / 2);

for($i = 1 ; $i <= $num ; $i++){
    $suma = $suma + $i;
    
}

echo "S1: $suma \n";
echo "S2: $s2 \n";

if($suma == $s2){
    echo "Son iguales";
}
else{
    echo "No son iguales";
}