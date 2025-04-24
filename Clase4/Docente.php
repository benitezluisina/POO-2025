<?php
require "Persona.php";
class Docente extends Persona{
    //atributos de docente
    public $salario;

    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }

    public function datosDocente(){
        $this->mostrarDatos();
        echo "<br>Mi sueldo es de: ".$this->salario." pesos.";
    }
}
?>