<?php

session_start ();


 require_once "PHP/coneccion.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Nuestras Mascotas</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <link href="css/estilo.css" rel="stylesheet"/>
    <link href="css/estilos.css" rel="stylesheet"/>


    <!--  NUEVAS COSAS Y APARTADO--->

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

    <!-- Estilo  MF-->
    <link href="css/estilito.css" rel="stylesheet"> 

            <!--  NUEVAS COSAS Y APARTADO--->


</head>


<body >

    <a href="" class="btn-flotante"  id="btnCarrito">Ir al Formulario <span class="badge bg-success" ></span></a>
    <!-- Navigation-->


 <!-- Topbar Start -->
 <div class="container-fluid bg-black p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Av. Concha y Toro 2730, Puente Alto, Región Metropolitana</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small class="izipizi">Atención: Lunes a Viernes 9:00 a 18:00 hrs </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><a href="tel:+56911111111">Si quieres llamarnos +569 1111 11XX</a> </small>
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

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h3 class="m-0 texto-éxito"><img src="img/logoadopta.jpg" alt="logo" width="50%"></h3>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo '&nbsp; &nbsp; Bienvenido,   ' . $_SESSION['usuario']; 
            } else {
                // El usuario no ha iniciado sesión, mostrar un mensaje de error o redireccionar al formulario de inicio de sesión
                echo '&nbsp;&nbsp;#Por favor inicie sesión';
            }
            ?>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Inicio</a>
                <a href="Quienes_Somos.php" class="nav-item nav-link">Quienes Somos</a>
                <a href="codigoS.php" class="nav-item nav-link active">Mascotas</a>
                <a href="contacto.php" class="nav-item nav-link">Donaciones</a>
            </div>
            <a href="Login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Iniciar Sesion<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>


        
        <header class="bg-success py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                  <picture> <img src='img/todosjuntos.jpg' ></picture>
                    <h3 class="display-2 fw-bolder">Rescata una de nuestras preciosas Mascotas en Adopcion</h3>
                    <p class="lead fw-normal text-white  mb-0"> <strong> Todos son adorables  </strong> </p>
                </div>
            </div>
        </header>



<!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD --><!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD --><!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="col-md-12">
        <div class="table-responsive">
          <table style="width: 100%;">
            <thead class="thead-dark">
              <tr>
                <td>
                  <strong><a href="#" class="nav-link text-war text-black" category="all">Todos</a></strong>
                </td>
                <td>
                  <table>
                    <tr>
                      <?php
                      $query = mysqli_query($coneccion, "SELECT * FROM categorias");
                      while ($data = mysqli_fetch_assoc($query)) { ?>
                        <td><a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><strong><?php echo $data['categoria']; ?></strong></a></td>
                      <?php } ?>
                    </tr>
                  </table>
                </td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </nav>
</div>
<!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD --><!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD --><!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD -->



    
<!--- TRAE EL CUADRO/card CON LA INFORMACION DESDE LA BDD--->
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($coneccion, "SELECT p.*, c.id AS id_cat, c.categoria FROM mascotas p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Mascota image-->
                                <img id="imgcaja" class="card-img-top" src="img/<?php echo $data['imagen']; ?>" height="200"  alt="..." />
                                <!-- Mascota details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Mascota name-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p class=""><?php echo $data['descripcion']; ?></p>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark "  href="formulario.php">Adoptar</a></div>
                                </div>
                            </div>
                        </div> 
                <?php  }
                } ?>

            </div>
        </div>
    </section>
<!--- TRAE EL CUADRO/card CON LA INFORMACION DESDE LA BDD--->


<!-- Modal -->
<div class="modal fade" id="descripcionModal-<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="descripcionModalLabel-<?php echo $data['id']; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="descripcionModalLabel-<?php echo $data['id']; ?>">Descripción completa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $data['descripcion']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>





    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Fundación Adopta No Compres 2023</p>
        </div>
    </footer>
    <!-- Footer-->




<!--- SCRIPT COLOCAR EL SCRIPT ---><!--- SCRIPT COLOCAR EL SCRIPT --->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
<!--- SCRIPT COLOCAR EL SCRIPT ---><!--- SCRIPT COLOCAR EL SCRIPT --->


<script>
  // Obtener todos los elementos de descripción y enlaces "Ver más"
  const descripcionesRecortadas = document.querySelectorAll('.descripcion-recortada');
  const descripcionesCompletas = document.querySelectorAll('.descripcion-completa');
  const verMasLinks = document.querySelectorAll('.ver-mas');

  // Iterar sobre cada enlace "Ver más"
  verMasLinks.forEach((link, index) => {
    // Agregar un controlador de evento de clic a cada enlace
    link.addEventListener('click', (event) => {
      event.preventDefault();

      // Alternar la visibilidad de los elementos de descripción
      descripcionesRecortadas[index].classList.toggle('hidden');
      descripcionesCompletas[index].classList.toggle('hidden');
    });
  });
</script>





</body>

</html>