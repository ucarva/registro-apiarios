<?php
    include("conexion.php");
    if(isset($_POST['register'])){

            if(
                strlen ($_POST['nombre']) >=1 &&
                strlen ($_POST['lugar']) >=1 &&
                strlen ($_POST['finca']) >=1 &&
                strlen ($_POST['granjero']) >=1 &&
                strlen ($_POST['telefono']) >=1 && 
                strlen ($_POST['fecha']) >=1 
            
            ){

                $nombre = trim($_POST['nombre']);
                $lugar = trim($_POST['lugar']);
                $finca = trim($_POST['finca']);
                $granjero = trim($_POST['granjero']);
                $telefono= trim($_POST['telefono']);
                $fecha = trim($_POST['fecha']);
                /*$fecha = date("d/m/y");*/
                $consulta = "INSERT INTO apiarios(nombre,lugar,finca,granjero,telefono,fecha)
                    VALUES('$nombre','$lugar','$finca','$granjero','$telefono','$fecha')";
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