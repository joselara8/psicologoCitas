<?php
ob_start();
session_start();
$servidor = "localhost";
$usuarioDB = "root";
$clave = "";
$bd = "sistemacitas";
$enlace = mysqli_connect($servidor, $usuarioDB, $clave, $bd, 3307);
$error = null;

if (isset($_POST['registro'])) {
    $usuario = trim($_POST['usuario']);
    $contraseña = $_POST['contraseña'];

    if ($usuario === 'psicogalv@gmail.com' && $contraseña === 'Jojo0604$') {
        $_SESSION['usuario'] = $usuario;
        ob_end_clean();
        header("Location: administradorPsicologo");
        exit();
    }

    $usuarioEscapado = mysqli_real_escape_string($enlace, $usuario);
    $consulta = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = mysqli_prepare($enlace, $consulta);
    mysqli_stmt_bind_param($stmt, "s", $usuarioEscapado);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        if (password_verify($contraseña, $fila['password'])) {
            $_SESSION['usuario'] = $usuario;
            ob_end_clean();
            header("Location: reservacion");
            exit();
        } else {
            $error = "Contraseña incorrecta. Intenta de nuevo.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Iniciar Sesión</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Estilos externos -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
  <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="Vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="Vistas/dist/css/adminlte.min.css">

  <!-- Estilos personalizados -->
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Source Sans Pro', sans-serif;
      background-color: #f4f6f9;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      width: 100%;
      max-width: 420px;
      background: white;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    .login-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-header h1 {
      font-size: 2rem;
      font-weight: 700;
      color: #343a40;
    }

    .login-header i {
      font-size: 3rem;
      color: #007bff;
      margin-bottom: 10px;
    }

    .form-control {
      border-radius: 30px;
    }

    .input-group-text {
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 30px 0 0 30px;
    }

    .btn-primary {
      border-radius: 30px;
      background-color: #007bff;
      border: none;
    }

    .btn-outline-primary {
      border-radius: 30px;
      margin-top: 10px;
    }

    .icheck-primary label {
      font-size: 0.9rem;
    }

    footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
    }
  </style>
</head>

<body class="hold-transition">
<main>
  <div class="login-box">
    <div class="login-header">
      <i class="fas fa-user-circle"></i>
      <h1>Bienvenido</h1>
      <p class="text-muted">Inicia sesión para hacer una cita</p>
    </div>

    <div class="card-body">
      <form action="" method="post">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text"><span class="fas fa-user"></span></div>
          </div>
          <input type="text" name="usuario" class="form-control" placeholder="Correo o usuario" required>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
          <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required>
        </div>

        <div class="row mb-3">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">Recuérdame</label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" name="registro" class="btn btn-primary btn-block">Ingresar</button>
          </div>
        </div>

        <div class="text-center">
          <a href="index.php?ruta=registro" class="btn btn-outline-primary btn-block">Nuevo registro</a>
        </div>
      </form>
    </div>
  </div>
</main>

</body>
<?php if ($error): ?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    alert('<?php echo addslashes($error); ?>');
  });
</script>
<?php endif; ?>

</html>
