<?php
$to = readline("Temperatura original del  huevo:");
$pi = 3.14159265359;
$m = 47;
$p = 1038;
$c = 3.7;
$k = 5.4 * pow(10, -3);

$temp = (pow($m, 2/3) * ($c * pow($p, 1/3))) / ($k * pow($pi, 2) * pow((4*$pi/3), 2/3));
$temp2 =  (0.76 * ($to - 100) / (ty - 100));