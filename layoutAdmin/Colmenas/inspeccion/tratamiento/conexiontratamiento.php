<?php
include("../../../../conexion.php");

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se proporcionaron los campos necesarios
    if (
        isset($_POST['colmena_id']) && isset($_POST['enfermedad']) &&
        isset($_POST['notas']) &&
        strlen($_POST['colmena_id']) >= 1 && strlen($_POST['enfermedad']) >= 1 &&
        strlen($_POST['notas']) >= 1
    ) {
        // Obtener y limpiar los datos del formulario
        $colmena_id = trim($_POST['colmena_id']);
        $enfermedad = trim($_POST['enfermedad']);
        $medicina = isset($_POST['respuesta_medicina']) ? $_POST['respuesta_medicina'] : ''; // Obtener la respuesta de medicina si está definida
        $nombre_medicina = isset($_POST['nombre_medicina']) ? trim($_POST['nombre_medicina']) : ''; // Obtener el nombre de la medicina si está definido
        $fecha_aplicacion = isset($_POST['fecha_aplicacion']) ? trim($_POST['fecha_aplicacion']) : ''; // Obtener la fecha de aplicación si está definida
        $fecha_dosis = isset($_POST['fecha_dosis']) ? trim($_POST['fecha_dosis']) : ''; // Obtener la fecha de dosis si está definida
        $dosis = isset($_POST['dosis']) ? trim($_POST['dosis']) : ''; // Obtener la dosis si está definida
        $notas = trim($_POST['notas']);

        // Realizar la inserción en la base de datos
        $inserte = "INSERT INTO tratamiento (colmena_id, enfermedad, medicina, nombre_medicina, fecha_aplicacion, fecha_dosis, dosis, notas) VALUES ('$colmena_id', '$enfermedad', '$medicina', '$nombre_medicina', '$fecha_aplicacion', '$fecha_dosis', '$dosis', '$notas')";
        $resultado = mysqli_query($conexion, $inserte);

        if ($resultado) {
?>


           
            <script>
                alert("Tratamiento registrado exitosamente");
            </script>
<?php
        } else {
            echo '<h2 class="danger">Error al registrar el tratamiento</h2>';
        }
    } else {
        echo '<h2 class="danger">Por favor, completa todos los campos</h2>';
    }
}
?>
