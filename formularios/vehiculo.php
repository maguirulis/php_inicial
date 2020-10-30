<?php

class Vehiculo{

    private $color;
    private $marca;
    private $modelo;
    private $precio;

    function __construct() {
        $this->precio = 100;
    }

    function getColor(){
        return $this->color;
    }

    function setColor($color){
        $this->color = $color;
    }

    function setModelo($modelo){
        if($modelo =="Fiesta"){
            $this->precio = 500000;
        }else{
            $this->precio = 200000;
        }

        $this->modelo = $modelo;

    }

    function DefinirPrecio(){
        //si modelo X y Marca Z
        //si modelo X marca W

    }

    function PruebaDeManejo(){
        $this->Acelerar();

        $this->Frenar();
    }

    private function Acelerar(){
        return 'Acelerando....';
    }

    private function Frenar(){
        return 'Frenando...';
    }

    function GetFichaCompleta(){
        $ficha  = "MARCA = $this->marca";
        
        $ficha .= "MODELO = $this->modelo";
        $ficha .= "COLOR  = $this->color";

        return $ficha;
    }


}