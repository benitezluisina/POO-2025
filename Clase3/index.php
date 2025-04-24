<!DOCTYPE html>
<html>
    <head>
        <title>Clase Cabesera</title>
    </head>
    <body>
        <?php
            include "CabeceraPagina.php";
            $cabecera=new CabeceraPagina('Programación Orientada a Obejtos','center');
            $cabecera->graficar();

            include "Tabla.php";
            $tabla1=new Tabla(2,3);
            $tabla1->cargar(1,1,"1");
            $tabla1->cargar(1,2,"2");
            $tabla1->cargar(1,3,"3");
            $tabla1->cargar(2,1,"4");
            $tabla1->cargar(2,2,"5");
            $tabla1->cargar(2,3,"6");
            $tabla1->graficar();
        ?>
    </body>
</html>