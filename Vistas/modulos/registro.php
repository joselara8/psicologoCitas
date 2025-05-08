<?php
// Conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "sistemacitas";
$enlace = mysqli_connect($servidor, $usuario, $clave, $bd);

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 mt-5">
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a href="#" class="h1"><b>Nuevo Usuario</b></a>
            </div>
            <div class="card-body">
              <p class="login-box-msg">Crea tu cuenta</p>

              <form method="post">
                <div class="input-group mb-3">
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                  <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-user"></span></div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" required>
                  <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
                  <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-user-circle"></span></div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required>
                  <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-lock"></span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" name="registrar" class="btn btn-primary btn-block">Registrar</button>
                  </div>
                </div>
              </form>

              <a href="index.php" class="text-center d-block mt-3">Ya tengo una cuenta</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
if (isset($_POST['registrar'])) {
    $nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
    $correo = mysqli_real_escape_string($enlace, $_POST['correo']);
    $usuario = mysqli_real_escape_string($enlace, $_POST['usuario']);
    $contraseña = mysqli_real_escape_string($enlace, $_POST['contraseña']);
    $password_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

    // Verificar si el usuario ya existe
    $verificar_usuario = "SELECT idusuarios FROM usuarios WHERE usuario = '$usuario'";
    $resultado_verificacion = mysqli_query($enlace, $verificar_usuario);

    if (mysqli_num_rows($resultado_verificacion) > 0) {
        echo "<script>alert('El usuario ya existe'); window.location='index.php';</script>";
    } else {
        // Insertar nuevo usuario
        $sql = "INSERT INTO usuarios (Nombre, Correo, usuario, password) 
                VALUES ('$nombre', '$correo', '$usuario', '$password_encriptada')";
        $resultado = mysqli_query($enlace, $sql);

        if ($resultado) {
            echo "<script>alert('Registro exitoso'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Error al registrar');</script>";
        }
    }
}
?>
