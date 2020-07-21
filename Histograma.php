
<?php

$numero = 1;
$positivo = "";
$negativo = "";


while($numero != 0){
    $numero = readline("Ingrese numero: ");

    if($numero > 0){
        $positivo = $positivo . "*";

    }elseif($numero < 0){
        $negativo = $negativo . "*";
    }
}

echo "Positivos: $positivo ";
echo "Negativos: $negativo ";