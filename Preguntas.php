<?php

include 'respuestasCorrectas.php';
$correcta = 0;
$incorrecta = 0;
$nula = 0;


for($i = 1; $i <= 50; $i++){
    
    echo "Pregunta $i: \n 0, 1, 2, 3, 4 o 5 \n";
    $respuesta = readline("Respuesta: ");

    if($respuesta == $respuestasCorrectas[$i - 1]){
        $correcta += 1;

    }elseif($respuesta == 0){
        $nula += 1;

    }else{
        $incorrecta += 1;
    }     
}

$puntajeIncorrecta = $incorrecta * 0.25 ;
$puntajeTotal = $correcta - $puntajeIncorrecta;

if( $puntajeTotal < 0){
    $puntajeTotal = 0 ;
}
    
    echo "\n";
    echo "Respuestas correctas: $correcta  $correcta puntos\n";
    echo "Respuestas incorrectas: $incorrecta -$puntajeIncorrecta puntos\n";
    echo "Respuestas nulas: $nula\n";
    echo "Puntaje obtenido: $puntajeTotal\n";


if($puntajeTotal < 30){
   $nota = round((4.0 - 1.0)* ($puntajeTotal / 30) + 1.0 , 1);

}elseif($puntajeTotal >= 30){
    $nota = (7.0 - 4.0) * (30- (30/50 *(1.0 - 0.6))) + 4.0;
}

echo "Nota: $nota \n";

$estudiante = readline("Desea revisar la prueba de otro estudiante: ");

if($estudiante == "si"){
    echo "\n";
    echo "Respuestas correctas: $correcta  $correcta puntos\n";
    echo "Respuestas incorrectas: $incorrecta -$puntajeIncorrecta puntos\n";
    echo "Respuestas nulas: $nula\n";
    echo "Puntaje obtenido: $puntajeTotal\n";
    echo $nota;
}