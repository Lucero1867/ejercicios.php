<?php

$nombre = readline("Nombre:");
$apellido = readline("Apellido:");


function saludo($nombre, $apellido = "Goméz"){

    echo "Hola $nombre $apellido, bienvenido a PHP";

}

function prueba(){ 

    echo"Probando funciones sin parametros";
   
}

prueba();
echo" \n";
saludo($nombre);

?>
