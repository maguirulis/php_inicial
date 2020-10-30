<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP</title>
</head>
<body>

    <h3>MI primer hola mundo desde php</h3>

    <?php
        session_start();

        if(isset($_SESSION['nombreUsuario'])){
            echo "bienvenido ==> ". $_SESSION['nombreUsuario'];
        }else{
            $_SESSION['nombreUsuario'] = "Christian";
        }
        $texto = "Hola curso desde <b>PHP</b>";

        echo '<p>'.$texto.'</p>';
    ?>

    <h3>Arrays asociativos</h3>
    <?php
        $arr = []; //array asociativo
        /*esto tambien es un 
        comentario de bloque*/

        $arr['nombre'] = "Maximiliano";
        $arr['edad'] = 40;

        //echo $arr;
        print_r($arr);

    ?>

    <h3>Estructuras condicionales</h3>
    <?php
        $a = 1;
        $b = 3;
    
        if($a== 1){
            echo "<h4>Variable a igual a 1</h4>";
        }

        if($a == $b){
            echo "a == b";
        }else{
            echo "<p>a es distinto de b</p>";
        }

        switch($b){
            case 0:
                echo "b es igual a cero";
            break;
            case 1:
                echo "b es igual a uno";
            break;
            case 2:
                echo "b es igual a 2";
            break;
            default:
                echo "b es cualquier otra cosa";
        }

        $letra_otra; //snake case
        $letraOtra; //camel case
        $_letra;
        $_letra2;
        //$4letra;
    ?>
    
    <h3>VARIABLES SUPERGLOBALES</h3>
    <?php

        var_dump($_SERVER['SERVER_NAME']);
    ?>
</body>
</html>