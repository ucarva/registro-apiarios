<?php
include("../../../../conexion.php");

if(isset($_POST['colmodal'])) {
    // Validación del campo "jarabe"
    if(empty($_POST['jarabe'])) {
        // Si el campo "jarabe" está vacío, mostrar una alerta
        echo '<script>alert("Por favor, seleccione una opción para el jarabe");</script>';
    } else {
        // Si el campo "jarabe" no está vacío, procesar los demás campos
        $colmena_id = mysqli_real_escape_string($conexion, $_POST['colmena_id']);
        $jarabe = mysqli_real_escape_string($conexion, $_POST['jarabe']);
        $azucar = mysqli_real_escape_string($conexion, $_POST['azucar']);
        $board = mysqli_real_escape_string($conexion, $_POST['board']);
        $candy = mysqli_real_escape_string($conexion, $_POST['candy']);
        $otro = mysqli_real_escape_string($conexion, $_POST['otro']);

        // Consulta SQL con valores escapados
        $inserte = "INSERT INTO alimentacion (colmena_id, jarabe, azucar, board, candy, otro) VALUES ('$colmena_id', '$jarabe', '$azucar', '$board', '$candy', '$otro')";
        $resultado = mysqli_query($conexion, $inserte);

        if($resultado) {
            // Alerta de éxito
            echo '<script>alert("Tarea registrada");</script>';
        } else {
            // Error en la inserción
            echo '<h2 class="danger">Error al registrar la Tarea</h2>';
        }
    }
}
?>
