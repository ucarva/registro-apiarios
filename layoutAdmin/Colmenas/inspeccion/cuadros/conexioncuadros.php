<?php
include("../../../../conexion.php");

if(isset($_POST['colmodal'])) {
    if(
        strlen($_POST['colmena_id']) >= 1 &&
        strlen($_POST['ocupados']) >= 1 &&
        strlen($_POST['cria']) >= 1 &&
        strlen($_POST['reserva']) >= 1 &&
        strlen($_POST['marco_vacio']) >= 1 &&
        strlen($_POST['marco_cambio']) >= 1 &&
        strlen($_POST['notas']) >= 1 
    ) {
        $colmena_id = trim($_POST['colmena_id']);
        $ocupados = trim($_POST['ocupados']);
        $cria = trim($_POST['cria']);
        $reserva = trim($_POST['reserva']);
        $marco_vacio = trim($_POST['marco_vacio']);
        $marco_cambio = trim($_POST['marco_cambio']);
        $notas = trim($_POST['notas']);
        

        $inserte = "INSERT INTO cuadros (colmena_id,ocupados,cria,reserva,marco_vacio,marco_cambio,notas) VALUES ($colmena_id,'$ocupados', '$cria', '$reserva', '$marco_vacio', '$marco_cambio', '$notas')";
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
