<?php
session_start();

include 'coneccion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_inicio_sesion = mysqli_query($coneccion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

if (mysqli_num_rows($validar_inicio_sesion) > 0) {
    $usuario = mysqli_fetch_assoc($validar_inicio_sesion);

    // Verificar si la sesión del usuario ya está activa
    if ($usuario['sesion_activa'] == 1) {
        echo '<center>';
        echo '<br><br><br><br>';
        echo 'Ya has iniciado sesión anteriormente.';
        echo '<br><br>';
        echo 'Te estamos redireccionando';
        echo '<br>';
        echo '</center>';
        // Redireccionar a index.php después de 5 segundos
        header("refresh:5;url=../index.php");
        exit;
    }

    // Actualizar el estado de la sesión del usuario a activo
    mysqli_query($coneccion, "UPDATE usuarios SET sesion_activa = 1 WHERE correo = '$correo'");

    // Establecer las variables de sesión
    $_SESSION['logged_in'] = true;
    $_SESSION['rol'] = $usuario['rol'];
    $_SESSION['correo'] = $usuario['correo'];

    // Establecer el nombre de usuario en la sesión
    $_SESSION['usuario'] = $usuario['usuario'];// Asumiendo que el campo en la base de datos que contiene el nombre de usuario se llama 'nombre'

    if ($usuario['rol'] == 'admin') {
        // Redireccionar al área de administrador
        header("location: ../Administrador/mascotas.php");
    } else {
        // Redireccionar a la página correspondiente para otros roles de usuario
        header("location: ../index.php");
    }
    
    exit;
} else {
    echo '
    <script>
        alert("Nombre de usuario o contraseña incorrecto");
        window.location = "../login.php";
    </script>
    ';
    exit;
}
?>
