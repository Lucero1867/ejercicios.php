<?php

$a = readline("Juego ganado por A: ");
$b = readline("Juego ganado por B: ");
$set = 6; //juegos//
$total = 7;


if($a > $total || $b > $total){
    echo "Inválido";
}
elseif($a == $total && $b < 5){
    echo "Inválido";
}
elseif($b == $total && $a < 5){
    echo "Inválido";
}
elseif($a < $set && $b < $set){
    echo "Aun no termina";
}
elseif($a == $total){
    echo "Gana A";
}
elseif($b == $total){
    echo "Gana B";
}
elseif($a == $set && $b < 5){
    echo "Gano A";
}
elseif( $b == $set && $a < 5){
    echo "Gano B";
}
else{
    echo "Aun no termina";
}












