<?php
    include("conexion.php");
    if(isset($_POST['register'])){

            if(
                strlen ($_POST['colmena']) >=1 &&
                strlen ($_POST['municipio']) >=1 &&
                strlen ($_POST['finca']) >=1 &&
                strlen ($_POST['trip_start']) >=1 &&
                strlen ($_POST['edad']) >=1  && 
                strlen ($_POST['observaciones']) >=1 
            
            ){

                $colmena = trim($_POST['colmena']);
                $municipio = trim($_POST['municipio']);
                $finca = trim($_POST['finca']);
                $trip_start = trim($_POST['trip_start']);
                $edad = trim($_POST['edad']);
                $observaciones = trim($_POST['observaciones']);
                $fecha = date("d/m/y");
                $consulta = "INSERT INTO datos(colmena,municipio,finca,trip_start,edad,observaciones,fecha)
                    VALUES('$colmena','$municipio','$finca','$trip_start','$edad','$observaciones','$fecha')";
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