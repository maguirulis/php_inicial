<?php
    require_once('./vehiculo.php');

    $miPrimerVehiculo = new Vehiculo();
    var_export($miPrimerVehiculo);
    

    $miPrimerVehiculo->setColor("rOJO");

    echo $miPrimerVehiculo->getColor();

    $miSegundoVehiculo = new Vehiculo();

    var_export($miSegundoVehiculo);

    $miTercerVehiculo = new Vehiculo();

    var_export($miTercerVehiculo);


