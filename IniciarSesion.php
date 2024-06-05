<?php   
    session_start();
    include('conexion.php');

    if (isset($_POST['nombre']) && isset($_POST['contraseña']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $nombre = validate($_POST['nombre']); 
    $contraseña = validate($_POST['contraseña']);

    if (empty($nombre)) {
        header("Location: Index.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($contraseña)) {
        header("Location: Index.php?error=La clave Es Requerida");
        exit();
    }else{

        // $Clave = md5($Clave);

        $Sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND contraseña='$contraseña'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['nombre'] === $nombre && $row['contraseña'] === $contraseña) {
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['nombre_completo'] = $row['nombre_completo'];
                $_SESSION['id'] = $row['id'];
                header("Location:./layoutAdmin/index.php");
                exit();
            }else {
                header("Location: Index.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: Index.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location: Index.php");
            exit();
}

