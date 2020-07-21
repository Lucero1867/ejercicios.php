<?php


$cantidad = readline("Cantidad de palabras: ");
$contador = 1;
$palabras = array();

    
while($contador <= $cantidad){
    $palabra = readline("Palabra $contador: ");
    $contador++;
    array_push($palabras, $palabra);
    
}

$palabraLarga = "";
$palabraCorta = $palabras[0];

 foreach($palabras as $palabra)
 {
    if(strlen($palabraLarga) < strlen($palabra)){ 
        $palabraLarga = $palabra;    
    }

    if(strlen($palabraCorta) > strlen($palabra)){ 
        $palabraCorta = $palabra;    
    }    
}

echo "La palabra mayor es $palabraLarga \n";
echo "La palabra menor es $palabraCorta";