<?php
session_start(); // SESSION START, NOS SIRVE PARA PODER INICIAR SESION CON NUESTRO USUARIO.

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // El usuario no ha iniciado sesión, redireccionar a la página de inicio de sesión
    header("location: ../login.php");
    exit;
}

// Verificar si el usuario tiene el rol de administrador
if ($_SESSION['rol'] !== 'admin') {
    // El usuario no tiene permisos de administrador, redireccionar a una página de acceso denegado o mostrar un mensaje de error
    echo "Acceso denegado. No tienes los permisos necesarios para acceder a esta página.";
    echo 'Te estamos redireccionando';
    // Redireccionar a index.php después de 5 segundos
    header("refresh:5;url=../index.php");
    exit;
}


require_once "../PHP/coneccion.php";
if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $query = mysqli_query($coneccion, "INSERT INTO categorias(categoria) VALUES ('$nombre')");
        if ($query) {
            header('Location: categorias.php');
        }
    }
}
include("header.php");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categorias de Mascotas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" id="abrirCategoria"><i class="fas fa-plus fa-sm text-white-50"></i> Agregar Categoria</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Eliminar</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($coneccion, "SELECT * FROM categorias ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['categoria']; ?></td>
                            <td>
                                <form method="post" action="eliminar.php?accion=cli&id=<?php echo $data['id']; ?>" class="d-inline eliminar">
                                    <button class="btn btn-danger" type="submit">Eliminar</button> 
                                </form>
                            </td>

                            <td>
                                <!-- Este boton editar -->

                                <form method="post" action="editar.php?accion=cli&id=<?php echo $data['id']; ?>" class="d-inline editar">
                                    <button class="btn btn-danger" type="submit">Editar</button>
                                </form>

                                <!-- Fin boton editar -->
                                
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="categorias" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title" id="title">Nueva Categoria</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Categoria" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>