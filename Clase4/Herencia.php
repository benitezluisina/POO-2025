<?php
require "Docente.php";

$docente1 = new Docente();
$docente1->setNombre("Luisina");
$docente1->setApellido("Benitez");
$docente1->setEdad(36);
//$docente1->mostrarDatos();

$docente1->setSalario("100.000");
$docente1->datosDocente();
?>