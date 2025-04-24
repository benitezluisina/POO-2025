<?php
//Confeccionar una clase llamada CabeceraPagina que permita mostrar un titulo, indicarle si queremos que aparezca centrado, a la derecha o a la izquierda
class CabeceraPagina{
    private $titulo;
    private $ubicacion;
    public function __construct($tit, $ubi){
        $this->titulo = $tit;
        $this->ubicacion = $ubi;
    }

    public function graficar(){
        echo '<div style="font-size:40px; text-align:'.$this->ubicacion.'">';
        echo $this->titulo;
        echo '</div>';
    }
}

?>