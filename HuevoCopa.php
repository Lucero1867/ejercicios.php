<?php
$T0 = readline("Temperatura original del huevo: ");
$M = 57;
$p = 1038;
$c = 3.7;
$K = 5.4 * pow(10, -3);
$Tw = 100;
$Ty = 66;


$temp = (pow($M, 2/3) * ($c * pow(pi(), 1/3))) / ($K * pow(pi(), 2) * pow((4*pi()/3), 2/3));
$temp2 = log((0.76 * ($T0 - $Tw) / ($Ty - $Tw)));
$resultado =  floor($temp * $temp2);
echo  "El huevo a la copa se demorara $resultado segundos";