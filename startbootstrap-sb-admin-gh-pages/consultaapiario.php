<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Consulta-Apiarios</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    
    
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<!-- Codigo Js para mensaje enviar -->
<script>
    function confirmacion (){
        var respuesta=confirm("¿La información es correcta?");
        if(respuesta==true){
            return true;
        }else{
            return false;
        }
    }
</script>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Montaña Dorada</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-warning" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Ajustes</a></li>
                    <li><a class="dropdown-item" href="#!">Registro actividades</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../Index.php">Cerrar sesion</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagesApiario" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Apiarios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePagesApiario" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="./registroapiario.php">Registrar</a>
                                <a class="nav-link" href="#">Consultar</a>
                                <a class="nav-link" href="#">Modificar</a>
                                <a class="nav-link" href="#">Eliminar</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Actividades
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="../startbootstrap-sb-admin-gh-pages/inspeccion.html">Nueva
                                    inspección</a>
                                <a class="nav-link" href="#">Enjambres</a>
                                <a class="nav-link" href="#">Cosecha</a>
                                <a class="nav-link" href="#">Calendario floral</a>
                                <a class="nav-link" href="#">Finanzas contabilidad</a>
                                <a class="nav-link" href="./registrocolmenas.html">Registrar Colmena</a>
                                <a class="nav-link" href="#">Ayuda</a>
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
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">APIARIOS</h1>

                    <!--Formulario de apiario-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!--Modal -->
                                        <!-- Button trigger modal -->
                                        
                                        <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#RegistroColmena'>
                                                                Agregar colmena
                                                            </button>
                                        <!-- Modal para colmenas -->
                                        <div class="modal fade" id="RegistroColmena" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Registro Colmena</h5>

                                                    </div>
                                                    <div class="modal-body">                                                   
                                                        <!--Formulario de registro-->
                                                        <div class="container">
                                                        
                                                            <form action="colmena.php" method="post">
                                                                <div class="mb-3">
                                                                  
                                                            <!--lista despegable-->
                                                            <label for="apiario" class="form-label">Apiario:</label>
                                                                    <!-- Lista desplegable que será llenada con nombres desde PHP -->
                                                                    <select class="form-select" name="apiario_id" id="apiario_id" required>
                                                                        <!--llamado desde php-->
                                                                        <?php
                                                                        // Incluye el archivo de conexión
                                                                        include 'consulapiario.php';

                                                                        // Query para seleccionar todos los datos de la tabla apiarios
                                                                        $sql = "SELECT * FROM apiarios";
                                                                        $result = $conn->query($sql);

                                                                        if ($result->num_rows > 0) {
                                                                            // Muestra los datos de cada fila
                                                                            while ($row = $result->fetch_assoc()) {
                                                                                /*llamamos el id y el nombre de la BDD */
                                                                                echo "  <option  name='nombre' value=" . $row["id"] . ">"  . $row["nombre"] . "</option>";
                                                                            }
                                                                        } else {
                                                                            echo "0 resultados";
                                                                        }
                                                                        // Cierra la conexión
                                                                        $conn->close();
                                                                        ?>
                                                                        <!-- fin llamado desde php-->
                                                                    </select>
                                                                    <!--fin de la selección lista despegable-->
                                                                    <!--inicio de items formulario-->



                                                                    <div class="col-12">
                                                                        <label for="inputState" class="form-label">Tipo de colmena:</label>
                                                                        <select id="inputState" name="tipo" class="form-select">
                                                                            <option selected>Colmena Vertical</option>
                                                                            <option selected>Camara de cría</option>
                                                                            <option selected>Núcleo</option>
                                                                            <option selected>Otra</option>

                                                                        </select>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <label for="text" class="form-label">Fecha Instalaciòn</label>
                                                                        <input type="date" name="fecha" id="start" name="trip_start" value="2020-07-22" min="2020-01-01" max="2026-12-31" />
                                                                    </div>

                                                                   

                                                                    
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                                                    <input class="btn btn-primary" type="submit" name="colmodal" value="Enviar" onclick="return confirmacion()">
                                                                </div>
                                                            </form>
                                                            <!-- fin Formulario de registro-->
                                                        </div>
                                                        <!-- Fin contaider de formulario-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--fin modal-->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="tablaapiarios" class="table table-bordered table-hover">
                                            <thead class="text-center">
                                                <tr>
                                             
                                                    <th >Nombre apiario</th>
                                                    <th>Ubicación</th>
                                                    <th>Nombre Finca</th>
                                                    <th>Nombre Granjero</th>
                                                    <th>Telefono Granjero</th>
                                                    <th>Fecha instalación</th>
                                                    <th>Acción</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Codigo de consulta registros bdd-->
                                                <?php
                                                // Incluye el archivo de conexión
                                                include 'consulapiario.php';

                                                // Query para seleccionar todos los datos de la tabla apiarios
                                                $sql = "SELECT * FROM apiarios";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // Muestra los datos de cada fila
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "   <tr>";
                                                      

                                                        echo "<td >" . $row["nombre"] . "</td>";
                                                        echo "<td>" . $row["lugar"] . "</td>";
                                                        echo "<td>" . $row["finca"] . "</td>";
                                                        echo "<td>" . $row["granjero"] . "</td>";
                                                        echo "<td>" . $row["telefono"] . "</td>";
                                                        echo "<td>" . $row["fecha"] . "</td>";
                                                        echo "<td> <form action='consulcolmena.php' method='get'><input class='btn btn-warning' value='Ver colmenas' type='submit'/>
                                                        <input type='hidden' name='apiario_id' value=". $row["id"] . " />
                                                        </form></td>";


                                                        // Añade más celdas según la estructura de tu tabla apiarios
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "0 resultados";
                                                }
                                                // Cierra la conexión
                                                $conn->close();

                                                ?>

                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
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