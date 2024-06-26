<?php
    include("../../conexion.php");
    if(isset($_POST['register'])){

            if(
                strlen ($_POST['nombre']) >=1 &&
                strlen ($_POST['municipio']) >=1 &&
                strlen ($_POST['finca']) >=1 &&
                strlen ($_POST['granjero']) >=1 &&
               strlen ($_POST['telefono']) >=1 && 
               strlen ($_POST['latitude']) >=1 &&
               strlen ($_POST['longitude']) >=1 &&
                strlen ($_POST['fecha_instal']) >=1 
               /* strlen ($_POST['ubicacion_map']) >=1 */
            
            ){

                $nombre = trim($_POST['nombre']);
                $municipio = trim($_POST['municipio']);
                $finca = trim($_POST['finca']);
                $granjero = trim($_POST['granjero']);
               $telefono= trim($_POST['telefono']);
                $fecha_instal= trim($_POST['fecha_instal']);
                $latitude= trim($_POST['latitude']);
                $longitude= trim($_POST['longitude']);
              /*  $ubicacion_map = trim($_POST['ubicacion_map']);*/
               
                $consulta = "INSERT INTO apiarios(nombre,municipio,finca,granjero,telefono,fecha_instal,latitude,longitude)
                    VALUES('$nombre','$municipio','$finca','$granjero','$telefono','$fecha_instal','$latitude','$longitude')";
                $resultado = mysqli_query($conexion,$consulta);
                    if($resultado){
                        ?>
                       
                        <h2 class="success">Tu registro se ha completado</h2>
                        <?php

                    }else{
                        ?>
                        <h2 class="danger">Ocurrio un error</h2>
                        <?php
                 }
                }else{
                        ?>
                        <h2 class="error">llena todo los campos</h2>
                        <?php
                    }

         }
            
        
        
    
?>