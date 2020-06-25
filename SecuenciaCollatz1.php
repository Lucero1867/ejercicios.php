<?php

$total = readline("n: ");

for($i = 1 ; $i <= $total; $i++){
    echo "$i ";

    $num = $i;
    do{
        
        if($num % 2 == 0){
            $num = $num / 2;
        }
        elseif($num % 2 != 0){
            $num = ($num * 3) + 1;
        }
        echo "* ";                          
        
    }while($num != 1);
    echo "\n";
}