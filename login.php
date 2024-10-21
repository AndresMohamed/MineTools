<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    include("src/con_db.php");
    include("src/controlador.php");
    ?>

    <form method="POST" action="">
        <label for="nombre">Usuario:</label>
        <input id="nombre" type="text" name="nombre"><br>

        <label for="contraseña">Contraseña:</label>
        <input type="text" name="contraseña">
        <input name="btningresar" type="submit" value="Iniciar sesion">
    </form>
    
</body>
</html>