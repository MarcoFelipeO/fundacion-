<?php

include 'coneccion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Validación del correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || strpos($correo, '@') === false) {
    echo '
        <script>
            alert("Por favor, ingrese un correo electrónico válido con el símbolo @"); 
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

// Validación de la contraseña
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $contrasena)) {
    echo '
        <script>
            alert("La contraseña debe tener al menos 8 caracteres y contener tanto mayúsculas como minúsculas"); 
            window.location = "../login.php";
        </script>
    ';
    exit();
}

// Verificar que el correo no se repita dentro de la BD
$verificar_correo = mysqli_prepare($coneccion, "SELECT * FROM usuarios WHERE correo = ?");
mysqli_stmt_bind_param($verificar_correo, "s", $correo);
mysqli_stmt_execute($verificar_correo);
$resultado_correo = mysqli_stmt_get_result($verificar_correo);

if (mysqli_num_rows($resultado_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado"); 
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

// Verificar que el usuario no esté vacío y no contenga solo espacios en blanco
if (empty($usuario) || empty(trim($usuario))) {
    echo '
        <script>
            alert("Por favor, ingrese un nombre de usuario válido"); 
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

// Verificar que el nombre_completo no esté vacío y no contenga solo espacios en blanco
if (empty($nombre_completo) || empty(trim($nombre_completo))) {
    echo '
        <script>
            alert("Por favor, ingrese un nombre completo válido"); 
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

// Crear consulta preparada
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
        VALUES (?, ?, ?, ?)";
$insertar_usuario = mysqli_prepare($coneccion, $query);
mysqli_stmt_bind_param($insertar_usuario, "ssss", $nombre_completo, $correo, $usuario, $contrasena);
$ejecutar = mysqli_stmt_execute($insertar_usuario);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario registrado con éxito"); 
            window.location = "../Login.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Usuario no registrado"); 
            window.location = "../Login.php";
        </script>
    ';
}

mysqli_stmt_close($insertar_usuario);
mysqli_close($coneccion);
?>