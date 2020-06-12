<?php

echo"Ingrese su fecha de nacimiento\n";
$dia = readline("Día: ");
$mes = readline("Mes: ");
$anno = readline("Año: ");
$HoyDia = date("d");
$HoyMes = date("m");
$HoyAnno = date("Y");

if($mes < $HoyMes){
    $resultado = abs($anno - $HoyAnno);
    echo "Usted tiene $resultado años";
}elseif($mes > $HoyMes){
    $resultado = abs($anno - $HoyAnno) - 1;
    echo "Usted tiene $resultado años";
}elseif($mes == $HoyMes && $dia > $HoyDia){
    $resultado = abs($anno - $HoyAnno) - 1;
    echo "Usted tiene $resultado años";
}elseif($mes == $HoyMes && $dia < $HoyDia || $anno != $HoyAnno){
    $resultado = abs($anno - $HoyAnno);
    echo "Usted tiene $resultado años";
}else {
    echo "Usted tiene cero años";
}


