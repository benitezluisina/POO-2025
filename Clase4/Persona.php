<?php
//Métodos: es una función que se define adentro de una clase y que se utiliza para representar
//un comportamiento de un objeto

/*
Cuatro pilares de la POO:

1) Encapsulamiento: es la característica de un lenguaje de POO que permite que todo lo referente
a un objeto quede aislado dentro de éste.

2) Abtracción: representa las características de la entidad hacia el mundo exterior pero
ocultando la complejidad.

3) Herencia: es la capacidad que tiene una clase de heredar propiedades y métodos de una clase
padre.

4) Polimorfismo: se refiere al hecho que varios objetos de diferentes clases, pero con base comun
se puedan usar de manera indistinta.
*/
class Persona{
    //atributos
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct(){

    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getApellido(){
        return $this->apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function mostrarDatos(){
        echo "Mi nombre es ".$this->nombre." ".$this->apellido." tengo ".$this->edad." años";
    }
}

/*$persona = new Persona();
$persona->setNombre("Luisina");
$persona->setApellido("Benitez");
$persona->setEdad(36);

$persona->mostrarDatos();*/

?>