<?php

$num = readline("n: ");

echo "$num ";

do{

    if($num % 2 == 0){
        $num = $num / 2;
    }
    elseif($num % 2 != 0){
        $num = ($num * 3) + 1;
    }
    echo "$num ";                          
    
}while($num != 1);

    
