<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Montaña Dorada</title>
  <link href="../css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />


</head>

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
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="../index.html">Montaña Dorada</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../../Index.php">Cerrar sesion</a></li>
          </ul>
        </li>
      </ul>

    </form>

  </nav>

  </form>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <a class="nav-link" href="../index.html">
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
                <a class="nav-link" href="../Apiarios/home.php">Registrar Apiario</a>
                <a class="nav-link" href="../Colmenas/home.php">Actividades Colmena</a>
                <a class="nav-link" href="../Reportes/home.php">Reportes</a>
              </nav>
            </div>

            <!--Administración-->

            <!--
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePagesadmin" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Administracion
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePagesadmin" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
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
                        </a>-->



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
              <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">

                    <!--Formulario-->


                    <h3 class="text-center font-weight-light my-4 ">
                      Registrar Apiario
                    </h3>

                    <?php
                    include("apiario.php");
                    ?>
                    <h2></h2>
                  </div>
                  <div class="card-body">
                    <form action="" method="post">
                      <div class="row mb-20">
                        <div class="mb-4">
                          <div class="form-floating mb-3 mb-md-0">
                            <input type="text" name="nombre" class="form-control  " id="inputFirstName" placeholder="nombre" />
                            <label for="inputFirstName">Nombre Apiario</label>
                          </div>
                        </div>
                        <div class="mb-4">
                          <div class="form-floating">
                            <input type="text" name="municipio" class="form-control" id="inputLastName" type="text" placeholder="lugar" />
                            <label for="inputLastName">Municipio o Vereda</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" name="finca" class="form-control" id="inputEmail" type="text" placeholder="finca" />
                        <label for="inputEmail">Nombre Finca</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" name="granjero" class="form-control" id="inputEmail" type="text" placeholder="granjero" />
                        <label for="inputEmail">Nombre Granjero</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="tel" name="telefono" class="form-control" id="inputEmail" type="num" placeholder="telefono" />
                        <label for="inputEmail">Telefono Granjero</label>
                      </div>

                      <div class="mb-4">
                        <label for="fecha_aplicacion" class="form-label">Fecha Instalaciòn </label>
                        <input type="date" class="form-control" id="start" name="fecha_instal" value="2024-01-01" min="2020-01-01" max="2040-12-31">
                      </div>

                      <!--  <div class="mb-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                          <input class="form-control" id="inputPasswordConfirm" type="num"
                                            placeholder="Edad Reina" />
                                          <label for="">Edad Reina</label>
                                        </div> 
                                      </div> -->
                      <div class="mb-4">
                        <div class="form-floating mb-3 mb-md-0">
                          <h2>Ubicación en el Mapa</h2>
                          <div id="map" class="">
                            <iframe class="container w-20 " src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d67233.74432444666!2d-73.39777320584164!3d8.201766435372056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8e677b971d6d1fd1%3A0xf3eeb5f83fb498c9!2sOca%C3%B1a%2C%20Norte%20de%20Santander!3m2!1d8.238693699999999!2d-73.3472901!5e0!3m2!1ses!2sco!4v1708614666410!5m2!1ses!2sco" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-10">
                        <div class="d-grid ">

                          <input class="btn btn-dark" type="submit" name="register" value="Enviar">

                          <!---   <a class="btn  btn-dark btn-block  " href="../Index.php">Enviar</a>-->
                        </div>
                      </div>
                    </form>




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
  <script src="../js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>