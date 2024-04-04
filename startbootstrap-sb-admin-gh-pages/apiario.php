<?php
    include("registroapiario.php");
    if(isset($_POST['register'])){

            if(
                strlen ($_POST['apiario']) >=1 &&
                strlen ($_POST['lugar']) >=1 &&
                strlen ($_POST['finca']) >=1 &&
                strlen ($_POST['granjero']) >=1 &&
                strlen ($_POST['telefono']) >=1 && 
                strlen ($_POST['fecha']) >=1 
            
            ){

                $apiario = trim($_POST['apiario']);
                $lugar = trim($_POST['lugar']);
                $finca = trim($_POST['finca']);
                $granjero = trim($_POST['granjero']);
                $telefono= trim($_POST['telefono']);
                $fecha = trim($_POST['fecha']);
                /*$fecha = date("d/m/y");*/
                $consulta = "INSERT INTO datos(apiario,lugar,finca,granjero,telefono,fecha)
                    VALUES('$apiario','$lugar','$finca','$granjero','$telefono','$fecha')";
                $resultado = mysqli_query($conexion,$consulta);
                    if($resultado){
                        ?>
                       
                        <h3 class="success">Tu registro se ha completado</h3>
                        <?php

                    }else{
                        ?>
                        <h3 class="error">Ocurrio un error</h3>
                        <?php
                 }
                }else{
                        ?>
                        <h3 class="error">llena todo los campos</h3>
                        <?php
                    }

         }
            
        
        
    
?>