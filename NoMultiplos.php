<?php

$numero = readline("Ingrese numero: ");

for($i = 1; $i <= $numero ; $i++){

    if($i % 3 != 0 && $i % 7 != 0){
       echo "$i\n";
    }

}