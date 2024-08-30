<?php
/*Codigo para verificación de acceso*/
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
    <link href="../../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<script>
    function confirmacion() {
        var respuesta = confirm("Procura realizar las tareas de la manera mas rápida posible para no enfriar las celdillas de cría.");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
</script>

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
                        <a class="nav-link" href="../../index.php">
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
                                <a class="nav-link" href="../../Apiarios/home.php">Registrar Apiario</a>
                                <a class="nav-link" href="../../Colmenas/home.php">Actividades Colmena</a>
                                <a class="nav-link" href="../../Reportes/home.php">Reportes</a> 


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
                <div class="container-fluid px-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <!--Formulario-->
                                        <h3 class="text-center font-weight-light my-4 ">
                                            Inspección colmena
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="container card-body">
                                            <div class="table-responsive">
                                                <table id="tablacolmenas" class="table table-bordered table-hover">
                                                    <thead class="text-center " >
                                                        <tr>
                                                            <th>Equipamiento colmena</th>
                                                            <th>Colonia</th>
                                                            <th>Alimentación</th>
                                                            <th>Reina</th>
                                                            <th>Cuadros</th>
                                                            <th>Tratamiento</th>
                                                            <th>Producción</th>
                                                           
                                                            
                                                            
                                                        </tr>                                                       
                                                    </thead>
                                                    <tbody class="text-center " >
                                                    <!-- Codigo de consulta registros bdd-->
                                                    <?php


                                                       


                                                    // Verificar si colmena_id está presente en la URL
                                                    if (isset($_GET['colmena_id'])) {
                                                        $colmena_id = $_GET['colmena_id'];
                                                    } else {
                                                        // Si no está presente, asignar un valor predeterminado o manejar el caso según sea necesario
                                                        $colmena_id = 'error con acceder a colmena_id'; // Por ejemplo, podrías asignar una cadena vacía o algún otro valor predeterminado
                                                                                }
                                            
                                                            echo "<tr><td> <form action='./equipamiento/equipamiento.php' method='get'><input onclick='return confirmacion()' class='btn btn-warning' value='Equipamiento' type='submit'/>
                                                            <input type='hidden' name='colmena_id' value=" . $colmena_id . " />
                                                            </form></td>";
                                                            echo "<td> <form action='./colonia/colonia.php' method='get'><input onclick='return confirmacion()' class='btn btn-warning' value='Colonia' type='submit'/>
                                                            <input type='hidden' name='colmena_id' value=" . $colmena_id . " />
                                                            </form></td>";
                                                            echo "<td> <form action='./alimentacion/alimentacion.php' method='get'><input onclick='return confirmacion()' class='btn btn-warning' value='Alimentacion' type='submit'/>
                                                            <input type='hidden' name='colmena_id' value=" . $colmena_id . " />
                                                            </form></td>";
                                                            echo "<td> <form action='./reina/reina.php' method='get'><input onclick='return confirmacion()' class='btn btn-warning' value='Reina' type='submit'/>
                                                            <input type='hidden' name='colmena_id'    value=" .  $colmena_id . " />
                                                            </form></td>";
                                                            echo "<td> <form action='./cuadros/cuadros.php' method='get'><input onclick='return confirmacion()' class='btn btn-warning' value='Cuadros' type='submit'/>
                                                            <input type='hidden' name='colmena_id' value=" . $colmena_id . " />
                                                            </form></td>";
                                                            
                                                            echo "<td> <form action='./tratamiento/tratamiento.php' method='get'><input onclick='return confirmacion()' class='btn btn-warning' value='Tratamiento' type='submit'/>
                                                            <input type='hidden' name='colmena_id' value=" .  $colmena_id . " />
                                                            </form></td>";
                                                            echo "<td> <form action='./produccion/produccion.php' method='get'><input class='btn btn-warning' value='Produccion' type='submit'/>
                                                            <input type='hidden' name='colmena_id' value=" .  $colmena_id . " />
                                                            </form></td>";
                                                                                                               
                                                            
                                                           
                                                            // Añade más celdas según la estructura de tu tabla apiarios
                                                            echo "";
                                                    

                                                    ?>
                                                     </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="../../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>