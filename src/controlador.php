<?php

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["nombre"] || empty($_POST["contraseña"]))) {
        echo '<div>Los campos estan vacios.</div>';
    } else {
        $nombre=$_POST["nombre"];
        $contraseña=$_POST["contraseña"];
        $sql = $conexion->query(" select * from usuario where nombre='$nombre' and contraseña='$contraseña' ");
        if ($datos=$sql->fetch_object()){
            header("location:home");
        } else {
            echo '<div>Acceso denegado</div>';

        }
    }
    
}


?>