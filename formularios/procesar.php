<?php
    require_once("./metodo.php");
    //var_dump($_POST);
    /*$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edadUsuario'];
    
    echo "<h2> Bienvenido $nombre $apellido</h2>";
    echo "<h3> usted tiene $edad años</h3>";*/
    MostrarMsj();
    
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edadUsuario'];

    echo "<h4> Bienvenido $nombre $apellido</h4>";
    echo "<h5> usted tiene $edad años</h5>";

    echo "<br>Superglobal GET<br>";

    /*var_dump($_REQUEST);
    var_dump($_POST);
    var_dump($_GET);*/
    //var_dump($_FILES);

    if($_FILES){
        $carpeta = "./imagenes/";
        $destino = $carpeta . basename($_FILES['imagenSubida']['name']);

        move_uploaded_file($_FILES['imagenSubida']['tmp_name'], $destino);

    }


    foreach($_POST as $campo => $valor){
        echo $campo;
        echo "<br>";
        echo $valor;
        echo "<br>";
    }

    foreach($_POST as $valor){
        echo $valor;
        echo "<br>";
    }

?>