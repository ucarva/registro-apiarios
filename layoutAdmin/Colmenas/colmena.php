<?php
     include("../../conexion.php");
    if(isset($_POST['colmodal'])){
        

            if(
               
                strlen ($_POST['apiario_id']) >=1 &&              
                strlen ($_POST['tipo']) >=1 &&
                strlen ($_POST['fecha_instal']) >=1            
            
            ){

                
                $apiario_id = trim($_POST['apiario_id']);     
                $tipo = trim($_POST['tipo']);
                $fecha_instal = trim($_POST['fecha_instal']);
                $qr="QR".rand(1, 1000000);
                
                

                $inserte = "INSERT INTO colmenas (apiario_id,qr,tipo,fecha_instal)
            VALUES ('$apiario_id','$qr', '$tipo','$fecha_instal')";

            $resultado = mysqli_query($conexion,$inserte);




                   if($resultado){
                    // Redirigir al usuario a una nueva página después de procesar el formulario
                        header("Location:home.php");
                        exit(); // Asegúrate de que el script se detenga después de redirigir
                        ?>
                    <script >
                        alert("Colmena regisrada")
                    </script>
                    
                                                          
                        <?php

                    }else{
                        ?>
                        <h2 class="danger">LLena todo los campos</h2>
                        <?php
                 }
                }else{
                        ?>
                        <h2 class="error">Ocurrio un error</h2>
                        <?php
                    }

         }
            
        
    
?>