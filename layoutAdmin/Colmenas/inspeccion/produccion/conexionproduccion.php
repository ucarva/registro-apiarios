<?php
include("../../../../conexion.php");

if(isset($_POST['colmodal'])) {
    if(
        strlen($_POST['colmena_id']) >= 1 &&
        strlen($_POST['fecha_produccion']) >= 1 &&
        strlen($_POST['cosecha']) >= 1 &&
        strlen($_POST['cantidad']) >= 1 &&
        strlen($_POST['cuadros']) >= 1 &&
        strlen($_POST['notas']) >= 1 
        
    ) {
        $colmena_id = trim($_POST['colmena_id']);
        $fecha_produccion = trim($_POST['fecha_produccion']);
        $cosecha = trim($_POST['cosecha']);
        $cantidad = trim($_POST['cantidad']);
        $cuadros = trim($_POST['cuadros']);
        $notas = trim($_POST['notas']);
        

        $inserte = "INSERT INTO produccion (colmena_id,fecha_produccion,cosecha,cantidad,cuadros,notas) VALUES ($colmena_id,' $fecha_produccion', ' $cosecha', '$cantidad', '$cuadros', ' $notas')";
        $resultado = mysqli_query($conexion, $inserte);

        if($resultado) {
            ?>
            <script>
                var colmena_id = "<?php echo $colmena_id; ?>";
                alert("Tarea registrada. colmena_id: " + colmena_id);
                window.location.href = "../inspeccion.php?colmena_id=" + colmena_id;
            </script>
            <?php
            exit(); // Asegurémonos de salir del script PHP después de la redirección
        } else {
            echo '<h2 class="danger">Error al registrar la Tarea</h2>';
        }
    } else {
        echo '<h2 class="danger">Por favor, completa todos los campos</h2>';
    }
}
?>
