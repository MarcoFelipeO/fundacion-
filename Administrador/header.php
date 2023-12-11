<!DOCTYPE html>
<html lang="es">
<?php

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Mostrar el mensaje de bienvenida junto con el nombre de usuario
   // echo 'Bienvenido, ' . $_SESSION['usuario'];
   // echo '<br>Rol: ' . $_SESSION['rol'];
   // echo '<br>Correo: ' .$_SESSION['correo'];
} else {
    // El usuario no ha iniciado sesión, mostrar un mensaje de error o redireccionar al formulario de inicio de sesión
    echo '#Por favor debes iniciar sesión ';
}

require_once "../PHP/coneccion.php";
?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventario</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="mascotas.php">
                <div class="sidebar-brand-text mx-3">Adopta, <sup>No Compres</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">
                    <i class="fas fa-tag"></i>
                    <span>Categoria de Mascotas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mascotas.php">
                    <i class="fas fa-list"></i>
                    <span>Mascotas en Adopcion</span></a>
            </li>


                     <!-- APARTADO DE PRUEBA NO ES PARA SIEMPRE  -->
            <li class="nav-item">
                    <a class="nav-link" href="gestion_Usuario.php">
                    <i class="fa fa-list"></i>
                    <span>Administrador de Usuarios</span></a>
            </li>
                      <!-- APARTADO DE PRUEBA NO ES PARA SIEMPRE  -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo 'Bienvenido, ' . $_SESSION['usuario']; ?></span>
                                <img class="img-profile rounded-circle" src="../img/todosjuntos.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil 
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../login.php">
                                    <a class="btn btn-warning" id="cerrarses" href="../cerrar_sesion.php">Cerrar sesión</a><!----CERRAR SESION ---->
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->