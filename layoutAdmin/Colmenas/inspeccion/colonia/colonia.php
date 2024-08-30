<?php
/*Codigo para verificación de acceso*/
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: ../index.php?error=Acceso no autorizado. Debe iniciar sesión.");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Montaña Dorada</title>
    <link rel="stylesheet" href="./layoutAdmin/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../../../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<script>
    function confirmacion() {
        var respuesta = confirm("¿La información es correcta?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
</script>

<style>
    .form-control:focus,
        .form-select:focus {
            border-color: #d3d3d3;
            /* Color del borde al enfocar */
            box-shadow: 0 0 0 0.25rem rgba(211, 211, 211, 0.5);
            /* Sombra del cuadro al enfocar */
        }
</style>

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand -->
    <a class="navbar-brand ps-3 d-none d-lg-block" href="index.php">Montaña Dorada</a>

    <!-- Sidebar Toggle (alineado a la izquierda) -->
    <div class="d-flex">
        <button class="btn btn-link btn-sm me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Menú desplegable de usuario (alineado a la derecha) -->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../index.php">Cerrar sesión</a></li>
            </ul>
        </li>
    </ul>
</nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="../../../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagesApiario" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Actividades
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePagesApiario" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="../../../Apiarios/home.php">Registrar Apiario</a>
                                <a class="nav-link" href="../../../Colmenas/home.php">Actividades Colmena</a>
                                <a class="nav-link" href="../../../Reportes/home.php">Reportes</a> 
                            </nav>
                        </div>
                        <!--Administración-->
                        <!--
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagesadmin" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Administracion
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePagesadmin" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="./registrousuario.html">Crear usuarios</a>
                                <a class="nav-link" href="#">Eliminar Apiarios</a>
                                <a class="nav-link" href="#">Eliminar Colmena</a>
                                <a class="nav-link" href="#">Eliminar Usuario</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Graficos
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tablas
                        </a>
-->


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Conectado como:</div>
                    Montaña Dorada
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">

                                    <!--Formulario-->
                                    <div class="container">


                                    <?php
                                                include "conexioncolonia.php";

                                                // Verificar si colmena_id está presente en la URL
                                                if (isset($_GET['colmena_id'])) {
                                                    $colmena_id = $_GET['colmena_id'];
                                                } else {
                                                    // Si no está presente, asignar un valor predeterminado o manejar el caso según sea necesario
                                                    $colmena_id = 'erro con acceder a colmena_id'; // Por ejemplo, podrías asignar una cadena vacía o algún otro valor predeterminado
                                                }
                                                ?>


                                        <form action="colonia.php" method="post">
                                            <div class="mb-3">
                                                <h3 class="text-center font-weight-light my-4 ">
                                                    Registro colonia
                                                </h3>


                                              
                                                <div>
                                                    <input type="hidden" name="colmena_id" value="<?php echo $colmena_id; ?>">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Fuerza de la colmena:</label>
                                                    <select id="inputState" name="fuerza" class="form-select">
                                                        <option selected>Débil</option>
                                                        <option selected>Muy Débil</option>
                                                        <option selected>Normal</option>
                                                        <option selected>Fuerte</option>
                                                        <option selected>Muy fuerte</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Temperamento:</label>
                                                    <select id="inputState" name="temperamento" class="form-select">
                                                        <option selected>Muy mansa</option>
                                                        <option selected>Levemente Defensiva</option>
                                                        <option selected>Defensiva</option>
                                                        <option selected>Muy Defensiva</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Presencia de celdas reales:</label>
                                                    <select id="inputState" name="celdas" class="form-select">
                                                        <option selected>Si</option>
                                                        <option selected>No</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Enjambre:</label>
                                                    <select id="inputState" name="enjambre" class="form-select">
                                                        <option selected>Si</option>
                                                        <option selected>No</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Falta alimento:</label>
                                                    <select id="inputState" name="alimento" class="form-select">
                                                        <option selected>Si</option>
                                                        <option selected>No</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Notas:</label>
                                                    <div id="inputState" name="notas" class="">
                                                        <textarea   class="col-12"  name="notas" id=""></textarea>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                            <a class="btn btn-danger" style="margin: 20px;" href="../inspeccion.php?colmena_id=<?php echo $colmena_id; ?>" style="text-decoration: none; color:black;">Cerrar</a>
                                            <input class="btn btn-warning" type="submit" name="colmodal" value="Enviar" onclick="return confirmacion()">
                                        </div>
                                        </form>
                                        <!-- fin Formulario de registro-->
                                    </div>
                                    <!-- Fin contaider de formulario-->
                                </div>
                            </div>
                        </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy;Tecnoparque 2024</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>






</body>

</html>