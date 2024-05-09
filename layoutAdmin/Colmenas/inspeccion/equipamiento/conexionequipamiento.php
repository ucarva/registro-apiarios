<?php
include("../../../../conexion.php");

if(isset($_POST['colmodal'])) {
    if(
        strlen($_POST['colmena_id']) >= 1 &&
        strlen($_POST['cria']) >= 1 &&
        strlen($_POST['alzas']) >= 1 &&
        strlen($_POST['medias']) >= 1 &&
        strlen($_POST['alimentador']) >= 1 &&
        strlen($_POST['polen']) >= 1 &&
        strlen($_POST['propoleo']) >= 1 &&
        strlen($_POST['reinas']) >= 1 &&
        strlen($_POST['excluidora']) >= 1 &&
        strlen($_POST['piquera']) >= 1 
    ) {
        $colmena_id = trim($_POST['colmena_id']);
        $cria = trim($_POST['cria']);
        $alzas = trim($_POST['alzas']);
        $medias = trim($_POST['medias']);
        $alimentador = trim($_POST['alimentador']);
        $polen= trim($_POST['polen']);
        $propoleo= trim($_POST['propoleo']);
        $reinas = trim($_POST['reinas']);
        $excluidora= trim($_POST['excluidora']);
        $piquera = trim($_POST['piquera']);

        $inserte = "INSERT INTO equipamiento (colmena_id,cria, alzas, medias, alimentador,polen,propoleo,reinas,excluidora,piquera) VALUES ($colmena_id,'$cria', '$alzas', '$medias', '$alimentador', '$polen', '$propoleo', '$reinas', '$excluidora', '$piquera')";
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
