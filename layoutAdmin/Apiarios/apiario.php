<?php
include("../../conexion.php");
if (isset($_POST['register'])) {

    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['municipio']) >= 1 &&
        strlen($_POST['finca']) >= 1 &&
        strlen($_POST['granjero']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['fecha_instal']) >= 1 &&
        strlen($_POST['latitude']) >= 1 &&
        strlen($_POST['longitude']) >= 1 &&
        strlen($_POST['cultivos_frutales']) >= 1 &&
        strlen($_POST['cultivos_flores']) >= 1 &&
        strlen($_POST['arboles']) >= 1 &&
        strlen($_POST['avesBeneficas']) >= 1 &&
        strlen($_POST['avesNobeneficas']) >= 1 &&
        strlen($_POST['velocidadViento']) >= 1 &&
        strlen($_POST['luz_frutales']) >= 1 &&
        strlen($_POST['humedadLugar']) >= 1 &&
        strlen($_POST['cultivos_agricolas']) >= 1 &&
        strlen($_POST['fuente_agua']) >= 1 &&
        strlen($_POST['apiario_cercano']) >= 1 &&
        strlen($_POST['vivienda_cercana']) >= 1 &&
        strlen($_POST['vias_acceso']) >= 1 &&
        strlen($_POST['altura_instalacion']) >= 1 

        

    ) {

        $nombre = trim($_POST['nombre']);
        $municipio = trim($_POST['municipio']);
        $finca = trim($_POST['finca']);
        $granjero = trim($_POST['granjero']);
        $telefono = trim($_POST['telefono']);
        $fecha_instal = trim($_POST['fecha_instal']);
        $latitude = trim($_POST['latitude']);
        $longitude = trim($_POST['longitude']);
        $frutales = trim($_POST['cultivos_frutales']);
        $flores = trim($_POST['cultivos_flores']);
        $arboles = trim($_POST['arboles']);
        $avesBeneficas = trim($_POST['avesBeneficas']);
        $avesNobeneficas = trim($_POST['avesNobeneficas']);
        $velocidadViento = trim($_POST['velocidadViento']);
        $luz_frutales = trim($_POST['luz_frutales']);
        $humedadLugar = trim($_POST['humedadLugar']);
        $cultivos_agricolas = trim($_POST['cultivos_agricolas']);
        $fuente_agua = trim($_POST['fuente_agua']);
        $apiario_cercano = trim($_POST['apiario_cercano']);
        $vivienda_cercana = trim($_POST['vivienda_cercana']);
        $vias_acceso = trim($_POST['vias_acceso']);
        $altura_instalacion = trim($_POST['altura_instalacion']);
        
        

        $consulta = "INSERT INTO apiarios(nombre,municipio,finca,granjero,telefono,fecha_instal,latitude,longitude,cultivos_frutales,cultivos_flores,
        arboles,avesBeneficas,avesNobeneficas,velocidadViento,luz_frutales,humedadLugar,cultivos_agricolas,fuente_agua,apiario_cercano,vivienda_cercana,vias_acceso,altura_instalacion)
                    VALUES('$nombre','$municipio','$finca','$granjero','$telefono','$fecha_instal','$latitude','$longitude',
                    '$frutales','$flores','$arboles','$avesBeneficas','$avesNobeneficas','$velocidadViento','$luz_frutales','$humedadLugar',
                    '$cultivos_agricolas','$fuente_agua','$apiario_cercano','$vivienda_cercana','$vias_acceso','$altura_instalacion')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <script>
                
                alert("Apiario registrado con exito");
                window.location.href = "../Colmenas/home.php";
               
            </script>
            <?php
            exit();

        } else {
        ?>
            <h2 class="danger">Ocurrio un error</h2>
        <?php
        }
    } else {
        ?>
        <h2 class="error">llena todo los campos</h2>
<?php
    }
}




?>