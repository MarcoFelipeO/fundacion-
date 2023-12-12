<?php
include 'coneccion.php';

// Obtener datos del formulario
$rut = $_POST['rut'];
$nombres = $_POST['nombres'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$comuna = $_POST['comuna'];
$fono = $_POST['fono'];
$nacionalidad = $_POST['nacionalidad'];
$edad = $_POST['edad'];
$domicilio = $_POST['domicilio'];
$refugiado = $_POST['refugiado'];
$razon = $_POST['razon'];
$esterilizacion = $_POST['esterilizacion'];
$ingreso_economico = $_POST['ingreso_economico'];
$posee_mascotas = $_POST['posee_mascotas'];
$id_region = $_POST['id_region'];


// Validar campos obligatorios
if (empty($rut) || empty($nombres) || empty($apellido_paterno) || empty($apellido_materno) || empty($email) || empty($direccion) || empty($comuna) || empty($fono) || empty($nacionalidad) || empty($edad) || empty($domicilio) || empty($refugiado) || empty($razon) || empty($esterilizacion) || empty($ingreso_economico)  || empty($id_region) ){
    
    echo '
        <script>
            alert("Todos los campos son obligatorios. Por favor, complete todos los campos e inténtelo de nuevo.");
            window.location = "../formulario.php"; 
        </script>
    ';
    exit();
}

//El siguiente código valida un rut con la estructura 11111111-1:
if (!preg_match("/^[0-9]{7,8}\-[0-9]{1}$/", $rut)) {
    echo '
        <script>
            alert("El rut ingresado no es válido");
            window.location = "../formulario.php";  
        </script>
    ';
    exit();
}

// Validar formato de correo electrónico
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '
        <script>
            alert("Ingrese un correo válido");
            window.location = "../formulario.php";  
        </script>
    ';
    exit();
}

// Validar formato de número de teléfono (puedes ajustar según el formato que necesites)
if (!preg_match("/^\d{9}$/", $fono)) {
    echo '
        <script>
            alert("Ingrese un celular válido con 9 digitos");
            window.location = "../formulario.php";  
        </script>
    ';
    exit();
}

//Edad debe ser mayor o igual a 18 años
if (!is_numeric($edad) || $edad < 18) {
    echo '
        <script>
            alert("Debes ser mayor de 18 años para adoptar");
            window.location = "../formulario.php";  
        </script>
    ';
    exit();
}
// Puedes agregar más validaciones según tus necesidades



// Crear consulta preparada
$query = "INSERT INTO formulario (rut,nombres, apellido_paterno, apellido_materno, email, direccion, comuna, fono,nacionalidad,edad,domicilio,refugiado,razon,esterilizacion,ingreso_economico,posee_mascotas,id_region) 
        VALUES (?,? ,?, ? ,? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; // 17

$insertar_formulario = mysqli_prepare($coneccion, $query);

// Verificar la preparación de la consulta
if (!$insertar_formulario) {
    die("Error en la preparación de la consulta: " . mysqli_error($coneccion));
}

// Vincular parámetros
mysqli_stmt_bind_param($insertar_formulario, "sssssssssssssssss", $rut, $nombres, $apellido_paterno, $apellido_materno, $email, $direccion, $comuna, $fono, $nacionalidad, $edad, $domicilio, $refugiado, $razon, $esterilizacion, $ingreso_economico, $posee_mascotas, $id_region);

// Ejecutar la consulta
$ejecutar = mysqli_stmt_execute($insertar_formulario);

// Verificar la ejecución de la consulta
if (!$ejecutar) {
    die("Error al ejecutar la consulta: " . mysqli_stmt_error($insertar_formulario));
} else {
    echo '<script>
            alert("Hemos recibido tu solicitud. Estamos redirigiéndote al inicio.");
            console.log("Redireccionando al inicio...");
            setTimeout(function() {
                window.location.href = "../index.php";
            }, 2000);
          </script>';
}

// Cerrar la consulta y la conexión
mysqli_stmt_close($insertar_formulario);
mysqli_close($coneccion);
?>
