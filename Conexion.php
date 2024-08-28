<?php 

    $conexion = mysqli_connect("localhost", "root", "", "bdmontanadorada");


    // Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Establecer la codificación de caracteres a UTF-8
$conexion->set_charset("utf8");

?>
