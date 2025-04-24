<!DOCTYPE html>
<html>
    <head>
        <title>Constructores POO</title>

    </head>
    <body>
        <?php
            include "CabeceraPagina.php";

            $titulo = "Programación Orientada a Objetos - Constructores";
            $ubicacion = "center";

            $cabecera = new CabeceraPagina($titulo, $ubicacion);
            $cabecera->graficar();

            include "Tabla.php";
            $tabla = new Tabla(2, 3);
            $tabla->cargar(1, 1, "Luisina");
            $tabla->cargar(1, 2, "Gonzalo");
            $tabla->cargar(1, 3, "Dana");
            $tabla->cargar(2, 1, "Martin");
            $tabla->cargar(2, 2, "Fabian");
            $tabla->cargar(2, 3, "Juan");
            $tabla->graficar();
        ?>
    </body>
</html>