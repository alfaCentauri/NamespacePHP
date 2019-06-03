<!DOCTYPE html>
<!--
    Create: 03/06/2019.
    Author: Ricardo Presilla.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Orientado a objeto</title>
    </head>
    <body>
        <?php
        /**
         * Metodo autoload.
         * @param Class $class Class
         */
            function autoload($class){
                $ruta ="Api/". str_replace("\\", "/", $class).".php";
                if(is_readable($ruta)){
                    require_once $ruta;
                }else {
                    print 'El archivo no existe. ';
                }
            }
            spl_autoload_register('autoload');
            //
            Models\Persona::Hola();
            Controllers\PersonaController::Hola();
            //
        ?>
    </body>
</html>
