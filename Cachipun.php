<?php

$puntajeA = 0;
$puntajeB = 0;

while ($puntajeA < 3 && $puntajeB < 3) {
    $jugadorA = readline("Jugador A: ");
    $jugadorB = readline("Jugador B: ");    


    if ($jugadorA == "tijera" && $jugadorB == "papel"){
        $puntajeA += 1;
    } 
    elseif ($jugadorB == "tijera" && $jugadorA == "papel"){
        $puntajeB += 1;
    }
    elseif ($jugadorA == "papel" && $jugadorB == "piedra"){
        $puntajeA += 1;
    }
    elseif ($jugadorB == "papel" && $jugadorA == "piedra"){
        $puntajeB += 1;
    }
    elseif ($jugadorA == "piedra" && $jugadorB == "tijera"){
        $puntajeA += 1;
    }
    elseif ($jugadorB == "piedra" && $jugadorA == "tijera"){
        $puntajeB += 1;
    }
    
    echo "$puntajeA - $puntajeB\n";
    
} 

if ($puntajeA == 3){
    echo "Gana Jugador A";
}
else{
    echo "Gana Jugador B";
}