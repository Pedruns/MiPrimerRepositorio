<!DOCTYPE html>
<?php require 'conexion.php'; ?>
<?php require 'store.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <a href="index.php">Ir a Index</a>
      </div>
      <form action="formulario.php" method="POST" id="main">
        <h1>Contacto</h1>
        <fieldset>
            <legend>Nombre</legend>
            <label for="nombre"></label>
            <input type="text" name="nombre" placeholder="Name" required>
        </fieldset>
        <fieldset>
            <legend>Correo Electronico</legend>
            <label for="correo"></label>
            <input type="email" id="correo" name="correo" placeholder="Email" required>
        </fieldset>
        <!-- <fieldset>
            <legend>Genero</legend>
            <label><input id="masculino" type="radio" name="genero" value="masculino"> Masculino</label>
            <label ><input id="femenino" type="radio" name="genero" value="femenino"> Femenino</label>
            <label ><input id="null" type="radio" name="genero" value="null"> Prefiero no decirlo</label>
        </fieldset>
        <fieldset>
            <legend>Contraseña</legend>
            <label for="contrasena"></label>
            <input type="password" id="contrasena" name="contrasena" placeholder="password" required>
        </fieldset>
        <fieldset>
            <legend>Comentario</legend>
            <label for="comentario"></label>
            <textarea name="comentario" id="comentario" cols="50" rows="5"></textarea>

        </fieldset>
        <fieldset>
            <legend>Ciudad</legend>
            <label><input id="guadalajara" type="checkbox" name="ciudad" value="guadalajara"> Guadalajara</label>
            <label><input id="zapopan" type="checkbox" name="ciudad" value="zapopan"> Zapopan</label>
            <label><input id="tonala" type="checkbox" name="ciudad" value="tonala"> Tonala</label>
            <label><input id="otra" type="checkbox" name="ciudad" value="otra"> Otra</label>
        </fieldset> -->
        <input type="submit" value="Enviar">
      </form>

    
</body>
</html>