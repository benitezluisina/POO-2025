<?php
//Crear o definir una clase
class Coche{
    //Esribir variables o atributos
    var $marca;
    var $modelo;
    var $color;
    var $propietario;

    //Funciones o métodos
    function setMarca($miMarca){
        $this->marca = $miMarca;
    }
    function getMarca(){
        return $this->marca;
    }

    function setModelo($miModelo){
        $this->modelo = $miModelo;
    }
    function getModelo(){
        return $this->modelo;
    }

    function setColor($miColor){
        $this->color = $miColor;
    }
    function getColor(){
        return $this->color;
    }

    function setPropietario($propietario){
        $this->propietario = $propietario;
    }
    function getPropietario(){
        return $this->propietario;
    }
}

echo "Ejemplo 1: Definir e instanciar una clase <br>";

//Instancia de una clase
$coche1 = new Coche;
$coche2 = new Coche;

//Accedo a las funciones o métodos para configurar el coche 1
$coche1->setMarca("Mercedes");
$coche1->setModelo("A");
$coche1->setColor("Blanco");
$coche1->setPropietario("Luisina Benitez");

//Acceso a las funcione del método get para recuperar los datos que fueron asignados en el metod set
echo "Coche 1: ".$coche1->getPropietario()." tiene un coche marca: ".$coche1->getMarca()." modelo: ".$coche1->getModelo(). " color: ".$coche1->getColor();

?>