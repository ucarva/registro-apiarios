<?php
include("../../../../conexion.php");

if(isset($_POST['colmodal'])) {
    if(
        strlen($_POST['colmena_id']) >= 1 &&
        strlen($_POST['raza']) >= 1 &&
        strlen($_POST['linea']) >= 1 &&
        strlen($_POST['numero']) >= 1 &&
        strlen($_POST['fuente']) >= 1 &&
        strlen($_POST['año_nacimiento']) >= 1 &&
        strlen($_POST['postura']) >= 1 &&
        strlen($_POST['ciclo']) >= 1 &&
        strlen($_POST['notas']) >= 1 
    ) {
        $colmena_id = trim($_POST['colmena_id']);
        $raza = trim($_POST['raza']);
        $linea = trim($_POST['linea']);
        $numero = trim($_POST['numero']);
        $fuente = trim($_POST['fuente']);
        $año_nacimiento = trim($_POST['año_nacimiento']);
        $postura = trim($_POST['postura']);
        $ciclo = trim($_POST['ciclo']);
        $notas = trim($_POST['notas']);
        

        $inserte = "INSERT INTO reina (colmena_id,raza,linea,numero,fuente,año_nacimiento,postura,ciclo,notas) VALUES ($colmena_id,'$raza', '$linea', '$numero',  '$fuente', '$año_nacimiento', '$postura', '$ciclo', '$notas')";
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
