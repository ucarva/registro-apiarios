<?php
include("../../../../conexion.php");

if(isset($_POST['colmodal'])) {
    if(
        strlen($_POST['colmena_id']) >= 1 &&
        strlen($_POST['fuerza']) >= 1 &&
        strlen($_POST['temperamento']) >= 1 &&
        strlen($_POST['celdas']) >= 1 &&
        strlen($_POST['enjambre']) >= 1 &&
        strlen($_POST['alimento']) >= 1 &&
        strlen($_POST['notas']) >= 1 
    ) {
        $colmena_id = trim($_POST['colmena_id']);
        $fuerza = trim($_POST['fuerza']);
        $temperamento = trim($_POST['temperamento']);
        $celdas = trim($_POST['celdas']);
        $enjambre = trim($_POST['enjambre']);
        $alimento = trim($_POST['alimento']);
        $notas = trim($_POST['notas']);
        

        $inserte = "INSERT INTO colonias (colmena_id,fuerza,temperamento,celdas,enjambre,alimento,notas) VALUES ($colmena_id,'$fuerza', '$temperamento', '$celdas', '$enjambre', '$alimento', '$notas')";
        $resultado = mysqli_query($conexion, $inserte);

        if($resultado) {
            
            ?>
            
            <script >
                alert("Tarea regisrada")
            </script>
                                              
            <?php
        } else {
            echo '<h2 class="danger">Error al registrar la Tarea</h2>';
        }
    } else {
        echo '<h2 class="danger">Por favor, completa todos los campos</h2>';
    }
}
?>
