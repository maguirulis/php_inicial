<?php
    session_start();

    echo $_SESSION['nombreUsuario'];

    session_destroy();
?>