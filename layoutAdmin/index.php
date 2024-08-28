<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Montaña Dorada</title>
    <link rel="stylesheet" href="/layoutAdmin/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="././css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

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
                        <a class="nav-link" href="index.php">
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
                                <a class="nav-link" href="./Apiarios/home.php">Registrar Apiario</a>
                                <a class="nav-link" href="./Colmenas/home.php">Actividades Colmena</a>
                                <a class="nav-link" href="./Reportes/home.php">Reportes</a>
                            </nav>
                        </div>
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
                    <h1 class="mt-4">Montaña Dorada</h1>
                    <!--Cajas-->


                    <!--Codigo php consulta-->
                    <?php
                    include('../layoutAdmin/Colmenas/conexion.php');


                    // Obtener el número de apiarios
                    $sqlApiarios = "SELECT COUNT(*) AS count FROM apiarios";
                    $resultApiarios = $conn->query($sqlApiarios);
                    $countApiarios = $resultApiarios->fetch_assoc()['count'];

                    // Obtener el número de colmenas
                    $sqlColmenas = "SELECT COUNT(*) AS count FROM colmenas";
                    $resultColmenas = $conn->query($sqlColmenas);
                    $countColmenas = $resultColmenas->fetch_assoc()['count'];

                    $conn->close();
                    ?>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-beehive me-1"></i>
                                    Apiarios Registrados
                                </div>
                                <div class="card-body">
                                    <h2 id="apiariosCount"><?php echo $countApiarios; ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-honey-pot me-1"></i>
                                    Colmenas Registradas
                                </div>
                                <div class="card-body">
                                    <h2 id="colmenasCount"><?php echo $countColmenas; ?></h2>
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
    <script src="js/scripts.js"></script>
</body>

</html>