<?php
/*Visibilidad
vamos a utilizar para dar acceso a las propiedades y los métodos de una clase.

Public: un método o una propiedad puede ser accedida desde cualquier clase.

Private: Solamente las propiedades o métodos se puede ver o acceder desde la misma clase

Protected: Solo se puede acceder a los métodos o propiedades desde la misma clase o clases heredadas
*/

class Visibilidad{
    //atributos
    public $nombre;
    protected $apellido;
    private $edad;

    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function mostrarApellido(){
        echo "<br>Apellido: ".$this->apellido;
    }
}

$visibilidad1 = new Visibilidad("Luisina",  "Benitez", 36);
echo $visibilidad1->nombre;
$visibilidad1->mostrarApellido();
?>