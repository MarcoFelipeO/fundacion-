<!DOCTYPE html>
<html lang="es">


<?php
session_start();
// En tu script principal (por ejemplo, index.php)
require_once 'vendor/autoload.php';

require_once "PHP/coneccion.php";
?>


<head>
    <meta charset="utf-8">
    <title>Fundación Adopta No Compres </title >
    <meta content="width=device-width, initial-scale=1.0" name=" viewport" >
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

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

    <!-- Estilo  IVANNA-->
    <link href="css/estilito.css" rel="stylesheet"> 

 

</head>

<body>
    
   <!-- Topbar Start -->
   <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small class="izipizi">Av. Concha y Toro 2730, Puente Alto, Región Metropolitana</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small class="izipizi">Atención: Lunes a Viernes 9:00 a 18:00 hrs  </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><a href="tel:+56911111111">Si quieres llamarnos +569 1111 11XX </a> </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h3 class="m-0 texto-éxito"><img src="img/logoadopta.jpg" alt="logo" width="60%"></h3>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true)  {
            echo '&nbsp; Bienvenido,   ' . $_SESSION['usuario']; 
            } else {
                // El usuario no ha iniciado sesión, mostrar un mensaje de error o redireccionar al formulario de inicio de sesión
                echo '&nbsp;&nbsp;#Por favor inicie sesión ';
            }
            ?>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active"> Inicio </a>
                <a href="Quienes_Somos.php" class="nav-item nav-link"> Quienes Somos </a>
                <a href="codigoS.php" class="nav-item nav-link"> Mascotas</a>
                <a href="contacto.php" class="nav-item nav-link">Donaciones</a>
            </div>
            <a class="btn btn-warning rounded-0 py-4 px-lg-5 d-none d-lg-block" href="cerrar_sesion.php">Cerrar sesión</a><!----CERRAR SESION ---->
            <a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Iniciar Sesión<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


<!--<?php 
echo '<div>';
    // Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Mostrar el mensaje de bienvenida junto con el nombre de usuario
    //echo 'Bienvenido, ' . $_SESSION['usuario'];
    echo 'Rol: ' . $_SESSION['rol'];
    echo '<br>Correo: ' .$_SESSION['correo'];
} else {
    // El usuario no ha iniciado sesión, mostrar un mensaje de error o redireccionar al formulario de inicio de sesión
    //echo '#Por favor debes iniciar sesión ';
}
echo '</div>';
?> -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.4s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/inicio.jpg'>">
                <img class="img-fluid" src="img/inicio.jpg" alt="" >
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Rescatamos...</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Pero tembién rehabilitamos y reubicamos <br> ¡Te invito a conocer nuestras historias de vida!</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/gato.jpg'>">
                <img class="img-fluid" src="img/gato.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Gatos</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Visitanos, mas de uno te enamorará.</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="owl-carousel-item position-relative" data-dot="<img src='img/perro2000x1000.jpg'>">
                <img class="img-fluid" src="img/perro2000x1000.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Perros</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Encuentra al compañero que necesitas para tu vida.</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="owl-carousel-item position-relative" data-dot="<img src='img/roedores.jpg'>">
                <img class="img-fluid" src="img/roedores.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                         <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown"> Roedores </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3"> Con un pequeño espacio, puedes darles un cambio gigante a sus vidas. </p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Carousel End -->
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Direccion</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Av. Concha y Toro 2730, Puente Alto, Región Metropolitana</p>
                        <small class="fa fa-phone-alt text-primary me-2"></small>
                        <small><a href="tel:+56932909140">Si quieres llamarnos +569 1111 11XX</a> </small>
                        <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>adoptanocompres@gmail.com</p>
                        <div class="d-flex pt-2">
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Enlaces Rapidos</h5>
                    <a class="btn btn-link" href="index.php">Inicio</a>
                    <a class="btn btn-link" href="Quienes_Somos.php">Quienes Somos</a>
                    <a class="btn btn-link" href="codigoS.php">Mascotas</a>
                    <a class="btn btn-link" href="contacto.php">Contacto</a>
                </div>


                <!--  AQUI el footer de las imagenes de parte baja   ----->

                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Galeria</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/perrito.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/gato.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/roedores.jpg" alt="">
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

                <!--  AQUI el footer de las imagenes de parte baja   ----->

                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Si desea mas informaciones</h5>
                        <p>Por favor comunicarse directamente con la oficina principal de Fundación Adopta No Compres</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href=""> Adopta, No Compres</a>, Todo los derechos Reservados.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            @ 2023, Chile</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


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