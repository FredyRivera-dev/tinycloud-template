<?php 

// No renombres estas variables. El deploy en TinyCloud depende de sus nombres.
// Los valores asignados sí puedes cambiarlos según tu entorno local.

$url_db = "localhost";
$user = "root";
$password = "";
$port = 3306;
$db_name = "default";

$conexion = new mysqli($url_db, $user, $password, $db_name, $port);

if($conexion -> connect_error){
    die("Error de conexion: ". $conexion -> connect_error);
}

$conexion -> set_charset("utf8mb4");