<?php
    include("conexion.php");
    if(isset($_POST['colmodal'])){

            if(
                strlen ($_POST['colmena_id']) >=1 &&
                
                strlen ($_POST['cria']) >=1 &&
                strlen ($_POST['alzas']) >=1 &&
                strlen ($_POST['medias']) >=1 &&
                strlen ($_POST['alimentador']) >=1 &&
                strlen ($_POST['polen']) >=1 &&
                strlen ($_POST['propoleo']) >=1 &&
                strlen ($_POST['reinas']) >=1 &&
                strlen ($_POST['excluidora']) >=1 && 
                strlen ($_POST['piquera']) >=1 
              
            
            ){

               $colmena_id = trim($_POST['colmena_id']);
                $camaraCria = trim($_POST['cria']);
                $alzasMeliferas = trim($_POST['alzas']);
                $mediasAlzasMeliferas = trim($_POST['medias']);
                $alimentador = trim($_POST['alimentador']);
                $trampaPolen = trim($_POST['polen']);
                $trampaPropoleo= trim($_POST['propoleo']);
                $jaulaReinas = trim($_POST['reinas']);
                $rejillaExcluidora= trim($_POST['excluidora']);
                $anchuraPiquera = trim($_POST['piquera']);
                

                $inserte = "INSERT INTO equipamiento (colmena_id,cria, alzas, medias, alimentador,polen,propoleo,reinas,excluidora,piquera)
            VALUES ($colmena_id,'$camaraCria', '$alzasMeliferas', '$mediasAlzasMeliferas', '$alimentador', '$trampaPolen', '$trampaPropoleo', '$jaulaReinas', '$rejillaExcluidora', '$anchuraPiquera')";
                $resultado = mysqli_query($conexion,$inserte);




                   if($resultado){
                    // Redirigir al usuario a una nueva página después de procesar el formulario
                        header("Location:index.html");
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