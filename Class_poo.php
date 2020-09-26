<?php

class panda {

    public $nombre;
    public $edad;
    public $sexo;

    function __construct($nombre, $edad, $sexo){

        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->sexo = $sexo;
    }

    function mostrarinfo(){
        echo $this->nombre;
        echo $this->edad;
        echo $this->sexo;
    }
}

$peludo = new panda("Peludo\n", "24\n" , "Hombre\n");
$peludo->mostrarinfo();

$poo = new panda("Poo\n", "30\n" , "Hombre\n");
$poo->mostrarinfo();


