<?php
    include "conexion.php";

    $nombre = "EPET N°20";
    $gestion = "Publica";
    $especialidad = "Tecnico en Programación";
    $localId = null;

    $query = "INSERT INTO institucion(nombre, gestion,( especialidad)
        VALUE('$nombre', '$gestion', '$especialidad')
    ";

    

    mysqli_close($conexion);
?>