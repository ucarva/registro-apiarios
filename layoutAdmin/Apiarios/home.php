<?php
/*Codigo para verificación de acceso*/
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: ../../index.php?error=Acceso no autorizado. Debe iniciar sesión.");
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
    <!-- Navbar Brand -->
    <a class="navbar-brand ps-3 d-none d-lg-block" href="../index.php">Montaña Dorada</a>

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
          <li><a class="dropdown-item" href="../../index.php">Cerrar sesión</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  </form>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <a class="nav-link" href="../index.php">
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
                      <div class="mb-4">
                        <input type="text" id="latitude" name="latitude" placeholder="latitude">
                        <input type="text" id="longitude" name="longitude" placeholder="longitude">
                        <!--Script para la geolocalización-->
                        <script>
                          function getLocation() {
                            if (navigator.geolocation) {
                              navigator.geolocation.getCurrentPosition(showPosition);
                            } else {
                              alert("Tu navegador no soporta la geolocalización.");
                            }
                          }

                          function showPosition(position) {
                            var latitude = position.coords.latitude;
                            var longitude = position.coords.longitude;

                            document.getElementById("latitude").value = latitude;
                            document.getElementById("longitude").value = longitude;
                          }
                        </script>
                        <input class="btn btn-warning" type="button" value="Obtener Ubicación Actual" onclick="getLocation()">
                        <h3 class="text-center font-weight-light my-4 ">
                          En un rango de 2KM
                        </h3>
                        <div class="mb-4">
                          <label class="form-label">¿Hay cultivos frutales cercanos?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="cultivos_frutales" id="si_cultivos" value="si" required>
                              <label class="form-check-label" for="si_cultivos">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="cultivos_frutales" id="no_cultivos" value="no" required>
                              <label class="form-check-label" for="no_cultivos">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Hay cultivos flores cercanos?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="cultivos_flores" id="si_cultivos" value="si" required>
                              <label class="form-check-label" for="si_cultivos">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="cultivos_flores" id="no_cultivos" value="no" required>
                              <label class="form-check-label" for="no_cultivos">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Existen arboles nativos?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="arboles" id="si_arboles" value="si" required>
                              <label class="form-check-label" for="si_arboles">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="arboles" id="no_arboles" value="no" required>
                              <label class="form-check-label" for="no_arboles">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿hay presencia de aves benéficas para los apiarios tales como: Golondrinas, Carboneros, Petirrojos, Lechuzas.?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="avesBeneficas" id="si_avesBeneficas" value="si" required>
                              <label class="form-check-label" for="si_avesBeneficas">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="avesBeneficas" id="no_avesBeneficas" value="no" required>
                              <label class="form-check-label" for="no_avesBeneficas">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Hay presencia de aves NO benéficas para los apiarios tales como: Abejarucos, Pájaros Carpinteros, Cuervos y Urracas.?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="avesNobeneficas" id="si_avesNobeneficas" value="si" required>
                              <label class="form-check-label" for="si_avesNobeneficas">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="avesNobeneficas" id="no_avesNobeneficas" value="no" required>
                              <label class="form-check-label" for="no_avesNobeneficas">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Cuál es la velocidad del viento promedio?</label>
                          <div class="input-group">
                            <input type="number" class="form-control" name="velocidadViento" placeholder="Ingrese velocidad del viento" aria-label="Velocidad del viento" min="0" required>
                            <span class="input-group-text">km/h</span>
                          </div>
                          <small class="form-text text-muted">Kilómetros por hora (km/h)</small>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿los apiarios recibirán luz directa solar sin la presencia de sombra durante el dia?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="luz_frutales" id="si_luz" value="si" required>
                              <label class="form-check-label" for="si_luz">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="luz_frutales" id="no_luz" value="no" required>
                              <label class="form-check-label" for="no_luz">
                                No
                              </label>
                            </div>
                          </div>
                        </div>


                        <div class="mb-4">
                          <label class="form-label">¿Cuál es la humedad relativa del lugar del apiario?</label>
                          <div class="input-group">
                            <input type="number" class="form-control" name="humedadLugar" placeholder="Ingrese humedad relativa" aria-label="Humedad relativa" min="0" max="100" required>
                            <span class="input-group-text">%</span>
                          </div>
                          <small class="form-text text-muted">Porcentaje de humedad relativa</small>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Hay cultivos agricolas cercanos que utilicen pesticidas?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="cultivos_agricolas" id="si_pesticidas" value="si" required>
                              <label class="form-check-label" for="si_pesticidas">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="cultivos_agricolas" id="no_pesticidas" value="no" required>
                              <label class="form-check-label" for="no_pesticidas">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Hay fuentes de agua cercano?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="fuente_agua" id="si_agua" value="si" required>
                              <label class="form-check-label" for="si_agua">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="fuente_agua" id="no_agua" value="no" required>
                              <label class="form-check-label" for="no_agua">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Hay apiarios cercanos?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="apiario_cercano" id="si_apiarioCercano" value="si" required>
                              <label class="form-check-label" for="si_apiarioCercano">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="apiario_cercano" id="no_apiarioCercano" value="no" required>
                              <label class="form-check-label" for="no_apiario?Cercano">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Hay vivienda o poblacion cercanas?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="vivienda_cercana" id="si_viviendaCercana" value="si" required>
                              <label class="form-check-label" for="si_viviendaCercana">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="vivienda_cercana" id="no_viviendaCercana" value="no" required>
                              <label class="form-check-label" for="no_viviendaCercana">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">¿Hay vias de acceso?</label>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="vias_acceso" id="si_acceso" value="si" required>
                              <label class="form-check-label" for="si_acceso">
                                Sí
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="vias_acceso" id="no_acceso" value="no" required>
                              <label class="form-check-label" for="no_acceso">
                                No
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label">Altura donde se instalará la colmena</label>
                          <div class="input-group">
                            <input type="number" class="form-control" name="altura_instalacion" placeholder="Ingrese altura" aria-label="Altura" required>
                            <span class="input-group-text">metros sobre el nivel del mar</span>
                          </div>
                        </div>


                      </div>

                      <div class="mt-4 mb-10">
                        <div class="d-grid ">
                          <input class="btn btn-warning" type="submit" name="register" value="Enviar">
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