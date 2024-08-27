<?php 

    $conexion = mysqli_connect("localhost", "root", "", "bdmontanadorada");


    // Verificar si la conexi贸n fue exitosa
if (!$conexion) {
    die("Error en la conexi贸n: " . mysqli_connect_error());
}

// Establecer la codificaci贸n de caracteres a UTF-8
$conexion->set_charset("utf8");

?>
