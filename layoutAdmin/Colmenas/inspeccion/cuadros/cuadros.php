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

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../../../index.html">Montaña Dorada</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../Index.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>

        </form>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="../../../index.html">
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
                                                include "conexioncuadros.php";

                                                // Verificar si colmena_id está presente en la URL
                                                if (isset($_GET['colmena_id'])) {
                                                    $colmena_id = $_GET['colmena_id'];
                                                } else {
                                                    // Si no está presente, asignar un valor predeterminado o manejar el caso según sea necesario
                                                    $colmena_id = 'erro con acceder a colmena_id'; // Por ejemplo, podrías asignar una cadena vacía o algún otro valor predeterminado
                                                }
                                                ?>


                                        <form action="cuadros.php" method="post">
                                            <div class="mb-3">
                                                <h3 class="text-center font-weight-light my-4 ">
                                                    Registro cuadros
                                                </h3>


                                              
                                                <div>
                                                    <input type="hidden" name="colmena_id" value="<?php echo $colmena_id; ?>">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Cuadros ocupados con abejas:</label>
                                                    <select id="inputState" name="ocupados" class="form-select">
                                                        <option selected>1</option>
                                                        <option selected>2</option>
                                                        <option selected>3</option>
                                                        <option selected>4</option>
                                                        <option selected>5</option>
                                                        <option selected>6</option>
                                                        <option selected>7</option>
                                                        <option selected>8</option>
                                                        <option selected>9</option>
                                                        <option selected>10</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Cuadros ocupados con crias:</label>
                                                    <select id="inputState" name="cria" class="form-select">
                                                        <option selected>1</option>
                                                        <option selected>2</option>
                                                        <option selected>3</option>
                                                        <option selected>4</option>
                                                        <option selected>5</option>
                                                        <option selected>6</option>
                                                        <option selected>7</option>
                                                        <option selected>8</option>
                                                        <option selected>9</option>
                                                        <option selected>10</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Reservas miel y polen:</label>
                                                    <select id="inputState" name="reserva" class="form-select">
                                                        <option selected>1</option>
                                                        <option selected>2</option>
                                                        <option selected>3</option>
                                                        <option selected>4</option>
                                                        <option selected>5</option>
                                                        <option selected>6</option>
                                                        <option selected>7</option>
                                                        <option selected>8</option>
                                                        <option selected>9</option>
                                                        <option selected>10</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Marcos vaciós:</label>
                                                    <select id="inputState" name="marco_vacio" class="form-select">
                                                        <option selected>1</option>
                                                        <option selected>2</option>
                                                        <option selected>3</option>
                                                        <option selected>4</option>
                                                        <option selected>5</option>
                                                        <option selected>6</option>
                                                        <option selected>7</option>
                                                        <option selected>8</option>
                                                        <option selected>9</option>
                                                        <option selected>10</option>
                                                    </select>
                                                </div>                                            
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Marcos o cera vieja para cambio:</label>
                                                    <select id="inputState" name="marco_cambio" class="form-select">
                                                        <option selected>Si</option>
                                                        <option selected>No</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputState" class="form-label">Notas:</label>
                                                    <div id="inputState" name="notas" class="">
                                                        <textarea name="notas" id=""></textarea>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                            <button class="btn btn-danger" style="margin: 20px;"><a href="../inspeccion.php?colmena_id=<?php echo $colmena_id; ?>" style="text-decoration: none; color:black;">Cerrar</a></button>
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
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>






</body>

</html>