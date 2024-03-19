<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login - Sistema de Usuarios</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <style>
        body {
            background: #ffe259;
            background: linear-gradient(to right, hsl(80, 10%, 94%), #ffe259);
        }

        .bg {
            background-image: url(img/bg.jpg);
            background-position: center center;
            background-size: 100%;

        }
    </style>
</head>

<body class="login-layout ">
    <div class="container w-75 bg-warning mt-5 rounded shadown ">
        <div class="row align-items-stretch shadow-lg p-3 mb-5 bg-body rounded">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 "></div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="./img/logo.avif" width="90" />
                </div>
                <h2 class="fw-bold text-center ">MONTAÑA DORADA</h2>
                <h3  class="fw-normal text-center" >Bienvenidos</h3>

                <!--Mensaje error -->
             

                <?php
                if (isset($_GET['error'])) {
                ?>
                    <p class="error alert alert-danger">
                        <?php
                        echo $_GET['error']
                        ?>

                    </p>
                <?php
                }
                ?>

            
                <!--Login-->
                <form action="IniciarSesion.php" method="POST">
                    <div class="mb-4">
                        <label for="text" class="form-label">Usuario</label>
                        <input type="text" name="Usuario" placeholder="Nombre de usuario" class="form-control">
                    </div>
                    <div class="mb-4">

                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="Clave" placeholder="Clave" class="form-control">

                    </div>
                    <div class="d-grid">

                        <button type="submit" class="btn btn-dark">Iniciar Sesion</button>
                    </div>
                    <div class="my-3">
                        <a href="">Recuperar Contraseña</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>