<?php

$edad = readline("Ingrese edad: ");
$peso = readline("Ingrese peso (gr): ");
$talla = readline("Ingrese estatur (mts): ");

$imc = round($peso / pow($talla, 2), 2);

if($imc < 22.0 && $edad < 45){
    echo "Su IMC es $imc, Riesgo cardiovascular bajo. ";
}
elseif($imc < 22.0 && $edad > 45){
    echo "Su IMC es $imc, Riesgo cardiovascular medio.";
}
elseif($imc > 22.0 && $edad < 45){
    echo "Su IMC es $imc, Riesgo cardiovascular medio.";
}
elseif($imc > 22.0 && $edad > 45){
    echo "Su IMC es $imc, Riesgo cardiovascular alto.";
}
