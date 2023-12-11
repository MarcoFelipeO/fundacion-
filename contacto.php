<!DOCTYPE html>
<html lang="en">
<?php require_once "PHP/coneccion.php"; ?>
<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" >

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">  Espere        </span>
        </div>
    </div>
    <!-- Spinner End -->


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
                    <small>Atención: Lunes a Viernes 9:00 a 18:00 hrs</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><a href="tel:+56911111111">Telefono: (+56 9) 1111 XXXX </a></small>
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
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 texto-éxito"><img src="img/logoadopta.jpg" alt="logo" width="40%"></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Inicio</a>
                <a href="Quienes_Somos.php" class="nav-item nav-link">Quienes Somos</a>
                <a href="codigoS.php" class="nav-item nav-link">Mascotas</a>
                <a href="contacto.php" class="nav-item nav-link active">Donaciones</a>
            </div>
            <a href="Login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Inicia Sesion Aqui<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-black mb-3 animated slideInDown">Contacto</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="donaciones-container">
        <div class="card mx-auto" style="max-width: 400px;" >
        <div class="card-header bg-primary text-white">
            <h5 class="card-title">Donaciones</h5>
        </div>
        <div class="card-body">
            <p class="card-text">¡Tu contribución hace la diferencia!</p>
            <h6 class="card-subtitle mb-2 text-muted">Formas de donar:</h6>
            <ul>
            <li>Donación Monetaria</li>
            <li>Donación de Materiales</li>
            <li>Donación de Servicios</li>
            </ul>
            <p class="card-text">Para realizar una donación o obtener más información, contáctanos:</p>
            <ul>
            <li>Correo electrónico: adoptanocompres@gmail.com</li>
            <li>Teléfono: +569 11111111</li>
            <li>Redes sociales: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://www.twitter.com/">Twitter</a>, <a href="https://www.instagram.com/">Instagram</a></li>
            <li>Datos de depósito o transferencia: <br> Cuenta Corriente / Banco Barahona / <br> N° Cuenta: 0000 123456789</li>
            </ul>
        </div>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">¿Necesitas ayuda?</h6>
                        <h1 class="mb-4">Contactate con Nosotros</h1>
                        <p class="mb-4"> Formulario de contacto</p>
                        <form action="https://formsubmit.co/d90b1b38d7d4d6a5f0a7e7071eaad9e6" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="name" placeholder="Ingrese Nombre" required>
                                        <label for="name">Ingrese su Nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" placeholder="Ingrese gmail" required>
                                        <label for="email">Ingrese su Correo</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" placeholder="asunto" required>
                                        <label for="subject">Asunto</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Ingresa Mensaje" required name="message" style="height: 100px"></textarea>
                                        <label for="message">Mensaje</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Enviar Mensaje</button>
                                    <input type= "hidden" name="_next" value ="http://localhost/Cristalerias%20ToroV1/contacto.php">
                                    <input type= "hidden" name="_captcha" value = "false">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Av.%20Concha%20y%20Toro%202730,%20Puente%20Alto,%20Regi%C3%B3n%20Metropolitana+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen="" aria-hidden="false"
                         tabindex="0"> > </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Direccion</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av. Concha y Toro 2730, Puente Alto, Región Metropolitana</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+56 9) 1111 XXXX</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>adoptanocompresl@gmail.com</p>
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
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Si desea mas informaciones</h5>
                    <p>Por favor comunicarse directamente con la oficina principal de la Fundación</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Fundación Adopta No Compres </a>, Todo los derechos Reservados.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/* This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. */-->
                        Hecho en Codigo HTML</a>
                    </div>
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