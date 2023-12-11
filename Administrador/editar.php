<?php
session_start(); // SESSION START, NOS SIRVE PARA PODER INICIAR SESION CON NUESTRO USUARIO.


if (isset($_GET['id'])) {
    require_once "../PHP/coneccion.php"; // se conecta a la base de datos
    $id = $_GET['id']; // ID

    // Verificar si se enviaron los datos del formulario
    if (isset( 
        $_POST['nombre'],
        $_POST['edad'], 
        $_POST['vacunas'],
        $_POST['descripcion'],  
        $_POST['peso_gramos'],
        $_POST['genero'],
        $_POST['estatura'],
        $_POST['raza'],
        $_POST['id_categoria']
        
        
    )){



        // Capturar los valores actualizados del formulario
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $vacunas = $_POST['vacunas'];
        $descripcion = $_POST['descripcion'];
        $peso_gramos =  $_POST['peso_gramos'];
        $genero = $_POST['genero'];
        $estatura = $_POST['estatura'];
        $raza = $_POST['raza'];
        $especie = $_POST['especie'];
        $id_categoria = $_POST['id_categoria'];
        

        // Realizar la consulta de actualización
        $query = mysqli_query($coneccion, "UPDATE mascotas SET 
            
        nombre = '$nombre', 
        edad = '$edad', 
        vacunas = '$vacunas', 
        descripcion = '$descripcion',
        peso_gramos = '$peso_gramos',
        genero = '$genero',
        estatura ='$estatura',
        raza = '$raza',
        especie = '$especie',
        id_categoria = '$id_categoria' 
        WHERE id = '$id'");
        if ($query) {
            header('Location: mascotas.php');
            exit(); // Importante: asegúrate de terminar la ejecución del script después de redirigir
        } else {
            echo "Error al actualizar los datos: " . mysqli_error($coneccion);
        }
    } else {
        // Obtener los datos existentes del registro para mostrarlos en el formulario
        $query = mysqli_query($coneccion, "SELECT * FROM mascotas WHERE id = '$id'");
        $mascota = mysqli_fetch_assoc($query);

        if ($mascota) {
?>
            
<html lang="es">
<?php include("header.php"); ?>
<body>
    <div class="container">
        <h1>Editar Mascota</h1>
        <form method="POST" action="editar.php?id=<?php echo $id; ?>">
            
        <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $mascota['nombre']; ?>">
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <textarea class="form-control" name="edad"><?php echo $mascota['edad']; ?></textarea>
            </div>

           
            <div class="form-group">
                <label for="vacunas">vacunas:</label>
                <input type="text" class="form-control" name="vacunas" value="<?php echo $mascota['vacunas']; ?>">
            </div>
           
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <textarea class="form-control" name="descripcion" ><?php echo $mascota['descripcion']; ?></textarea>
            </div>


            <div class="form-group">
                <label for="peso_gramos">Peso en Gramos:</label>
                <textarea class="form-control" name="peso_gramos" ><?php echo $mascota['peso_gramos']; ?></textarea>
            </div>

            
            <div class="form-group">
                <label for="genero">Género:</label>
                <textarea class="form-control" name="genero" ><?php echo $mascota['genero']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="estatura">estatura:</label>
                <textarea class="form-control" name="estatura" ><?php echo $mascota['estatura']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="raza">raza:</label>
                <textarea class="form-control" name="raza" ><?php echo $mascota['raza']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="especie">especie:</label>
                <textarea class="form-control" name="especie" ><?php echo $mascota['especie']; ?></textarea>
            </div>
    

            <div class="form-group">
                <label for="id_categoria">Categoría:</label>
                <select class="form-control" name="id_categoria">
                    <?php
                    // Obtener todas las categorías de la base de datos
                    $queryCategorias = mysqli_query($coneccion, "SELECT id, categoria FROM categorias");
                    while ($categoria = mysqli_fetch_assoc($queryCategorias)) {
                        $categoriaId = $categoria['id'];
                        $categoriaNombre = $categoria['categoria'];
                        ?>
                        <option value="<?php echo $categoriaId; ?>" <?php if ($categoriaId == $mascota['id_categoria']) echo "selected"; ?>><?php echo $categoriaNombre; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Actualizar">
        </form>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
        } else {
            echo "No se encontraron datos para la mascota con ID: $id";
        }
    }
} else {
    echo "ID no proporcionado";
}
?>

<?php include("footer.php"); ?>
