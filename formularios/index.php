<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de formulario</title>
</head>
<body>
    
    <form action="./procesar.php?genero=femenino" method="POST"
        enctype="multipart/form-data">
        <label for="">Nombre</label><input type="text" name="nombre" id="">
        <br>
        <label for="">Apellido</label><input type="text" name="apellido" id="">
        <br>
        <label for="">Edad</label><input type="number" name="edadUsuario" id="">
        <br>
        <label for="">Elegir foto</label><input type="file" name="imagenSubida" id="" value="Elegir imagen">
        <br>
        <button type="submit">Enviar a Procesar</button>
    </form>
</body>
</html>