<?php
    $server = "localhos";
    $user = "root";
    $pass = "";
    $db = "proyecto";

    $conexion = new SQL($server, $user, $pass, $db);

    if($conexion->connect_errno){
        die("Conexion fallida.. :".$conexion->connect_errno);
    }
?>