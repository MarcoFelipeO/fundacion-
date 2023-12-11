<?php 
    session_start();

    //conexion a la BDD
    require_once "PHP/coneccion.php";
    


    // Consultar regiones
$consulta_region = "SELECT id_region, nombre_region FROM region";
$resultado_region = mysqli_query($coneccion, $consulta_region);

// Verificar si la consulta de regiones fue exitosa
if (!$resultado_region) {
    die("Error en la consulta SQL de regiones: " . mysqli_error($coneccion));
}



    // Consultar Comunas // Consultar Comunas // Consultar Comunas 
$consulta_comuna = "SELECT id_comuna, nombre_comuna FROM comuna";
$resultado_comuna = mysqli_query($coneccion, $consulta_comuna);

// Verificar si la consulta de regiones fue exitosa
if (!$resultado_comuna) {
    die("Error en la consulta SQL de comunas: " . mysqli_error($coneccion));
}
    // Consultar Comunas // Consultar Comunas // Consultar Comunas // Consultar Comunas



?>

<html>
<!DOCTYPE html>
<html lang="es" >


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <meta charset="utf-8">
    <title>Formularo Fundación</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/estilito.css" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css">
</head>




<!-- Fin del head y comienzo de login superior-->

<!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  -->

<div class="container-fluid bg-dark p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small class="izipizi">Av. Concha y Toro 2730, Puente Alto, Región Metropolitana</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Atención: Lunes a Viernes 9:00 a 18:00 hrs</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small><a href="tel:+56911111111">Si quieres llamarnos +569 1111 11XX</a> </small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  -->
<!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0 texto-éxito"><img src="img/logoadopta.jpg" alt="logo" width="40%"></h2>
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo '&nbsp; Bienvenido,   ' . $_SESSION['usuario'];
        } else {
            // El usuario no ha iniciado sesión, mostrar un mensaje de error o redireccionar al formulario de inicio de sesión
            echo '&nbsp;&nbsp;#Por favor debes iniciar sesión ';
        }
        ?>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Inicio</a>
            <a href="quienes_somos.php" class="nav-item nav-link">Quienes Somos</a>
            <a href="codigoS.php" class="nav-item nav-link">Mascotas</a>
            <div class="nav-item dropdown">
            </div>
            <a href="contacto.php" class="nav-item nav-link">Donaciones</a>
        </div>

</nav>
<!-- Navbar End -->


<!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML ---------><!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML --------->
<!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML ---------><!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML --------->
<!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML ---------><!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML --------->

<div class="container">

<br>
    <center><h1 class="tituloformulario">Registro de Nuestras Mascotas Rescatadas</h1></center>
<br>
    <form action="PHP/Registro_formulario.php" id="registro" method="POST" class="formulario__">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rut">Rut:</label>
                    <input type="text" class="form-control" id="rut" name="rut"
                        placeholder="Digite su Rut sin puntos y con guion." required>
                </div>

                <div class="form-group">
                    <label for="nombres">Nombres:</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" required>
                </div>

                <div class="form-group">
                    <label for="apellido_paterno">Apellido Paterno:</label>
                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" required>
                </div>

                <div class="form-group">
                    <label for="apellido_materno">Apellido Materno:</label>
                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email"
                    placeholder="Escriba un correo electrónico válido" required>
                </div>
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" name="fono" 
                    placeholder="Escriba un celular de 9 dígitos" required>
                </div>

                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad:</label>
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
                </div>

                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="number" class="form-control" id="edad" name="edad" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>

                <div class="form-group">
                    <label for="comuna">Comuna:</label>
                    <input type="text" class="form-control" id="comuna" name="comuna" required>
                </div>

            </div>


                        <!-- Selector de region -->

            <div class="form-group">
                <label for="region">Region:</label>
                    <select class="form-control" id="id_region" name="id_region" required>
                            <?php
                                // Asegúrate de que $resultado_region tenga resultados
                                if ($resultado_region) {
                                    while ($row = mysqli_fetch_assoc($resultado_region)) {
                                        echo "<option value='" . $row['id_region'] . "'>" . $row['nombre_region'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay regiones disponibles</option>";
                                }
                            ?>
                    </select>
            </div>

                         <!-- Selector de region -->




                        <!-- Selector de Comuna --> 

                        <div class="form-group">
                        <label for="id_comuna">Comuna:</label>
                        <select class="form-control" id="id_comuna" name="id_comuna" required>

                                <?php
                                    // Asegúrate de que $resultado_region tenga resultados
                                    if ($resultado_comuna) {
                                        while ($row = mysqli_fetch_assoc($resultado_comuna)) {
                                            echo "<option value='" . $row['id_comuna'] . "'>" . $row['nombre_comuna'] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No hay comunas disponibles</option>";
                                    }
                                ?>


                        </select>

                        <!-- Selector de Comuna -->

                                   

        </div>
        <div class="form-group">
            <label for="domicilio">¿Cuenta con domicilio propio?:</label>
            <select class="form-control" id="domicilio" name="domicilio">
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="refugiado">¿Cuál de nuestros refugiados le interesa adoptar?:</label>
            <textarea class="form-control" id="refugiado" name="refugiado" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="razon">¿Por qué razón desea adoptar una mascota?:</label>
            <textarea class="form-control" id="razon" name="razon" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="esterilizar">¿Está dispuesto a esterilizarlo/a y mantener su calendario de vacunas al
                día?:</label>
            <textarea class="form-control" id="esterilizar" name="esterilizacion" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="ingreso_economico">Ingreso economico:</label>
            <input type="text" class="form-control" id="ingreso_economico" name="ingreso_economico" required>
        </div>

        <div class="form-group">
            <label for="posee_mascotas">Posee mas mascotas?</label>
            <textarea class="form-control" id="posee_mascotas" name="posee_mascotas" rows="4"></textarea>
        </div>

        <br>

        <!--boton de enviar-->
        <button type="submit" class="btn btn-primary">Enviar</button>
        <!--boton de enviar-->


    </form>
</div>

<!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML ---------><!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML --------->
<!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML ---------><!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML --------->
<!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML ---------><!----- AQUI ESTA EL FORMULARIO DE ADOPCION HTML --------->



<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Direccion</h5>
                <small class="izipizi">Av. Concha y Toro 2730, Puente Alto, Región Metropolitana</small>
                <br>
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small><a href="tel:+56911111111">Si quieres llamarnos +569 1111 11XX</a> </small>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>adoptanocompres@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Enlaces Rapidos</h5>
                <a class="btn btn-link" href="">Sobre Nosotros</a>
                <a class="btn btn-link" href="index.php">Inicio</a>
                <a class="btn btn-link" href="">Nuestros Servicio</a>
                <a class="btn btn-link" href="">Terminos y condiciones</a>
                <a class="btn btn-link" href="">Soporte</a>
            </div>
            <!--  AQUI el footer de las imagenes de parte baja   ----->

            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Galeria</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/.jpg" alt="">
                    </div>
                </div>


            </div>



            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Si desea mas informaciones</h5>
                <p>Por favor comunicarse directamente con la oficina principal de la Fundación</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Fundación Adopta No Compres 2023</a>, Todos los derechos Reservados.
                </div>
                <!--<div class="col-md-6 text-center text-md-end"> -->
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <!--  Hecho en <a href="">Codigo HTML</a> -->
            </div>
        </div>
    </div>
</div>
</div>


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
<script src="script.js"></script>
</div>

</body>

</html>