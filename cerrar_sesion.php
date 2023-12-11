<?php
session_start();
include 'PHP/coneccion.php';

if ($_SESSION['logged_in']) {
    $correo = $_SESSION['correo'];
    
    // Actualizar el estado de la sesión del usuario a inactivo
    mysqli_query($coneccion, "UPDATE usuarios SET sesion_activa = 0 WHERE correo = '$correo'");

    // Destruir todas las variables de sesión
    session_unset();
    session_destroy();

    // Redireccionar a la página de inicio de sesión
    header("location: Login.php");
    exit;
} else {
    // Si el usuario ya está deslogueado, redireccionar a la página de inicio de sesión
    header("location: Login.php");
    exit;
}
?>
