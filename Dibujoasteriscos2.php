<?php

$lado = 4;//readline("Lado: ");

for($i = 0; $i < $lado; $i++){
    
    for($j = 1; $j <= 10 ; $j++){ // $j = $j + 1
        
        if($j < $lado - $i){
            echo " ";
        }
        elseif($j >= $lado - $i && $j <= 7 + $i){
            echo "*";
        }
        else{
            echo " ";
        }
    }
   echo "K\n";
}

for($i = 3; $i > 0; $i--){
    
    for($j = 1; $j <= 8 ; $j++){ // $j = $j + 1
        
        if($j < $lado - $i){
            echo " ";
        }
        elseif($j >= $lado - $i && $j <= 7 + $i){
            echo "*";
        }
        else{
            echo " ";
        }
    }
   echo "K\n";
}

