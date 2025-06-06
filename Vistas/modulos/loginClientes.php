<?php
$servidor= "localhost";
$usuario= "root";
$clave="";
$bd="sistemacitas";
$enlace= mysqli_connect ($servidor, $usuario, $clave, $bd);
include("conexion.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/adminlte.min.css">
  <style>
    .login-page {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f4f6f9;
    }
    .login-box {
      width: 100%;
      max-width: 400px;
      margin: 5% auto;
    }
    @media (max-width: 576px) {
      .login-box {
        margin-top: 10%;
        padding: 20px;
      }
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Registrate</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registrate para hacer una cita</p>
   

      <form action="#" name="sistemacitas" method="post">
  <div class="input-group mb-3">
    <input type="text" name="usuario" class="form-control" placeholder="usuario" required>
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-envelope"></span>
      </div>
    </div>
  </div>
  <div class="input-group mb-3">
    <input type="password" name="contraseña" class="form-control" placeholder="contraseña" required>
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-8">
    <div class="icheck-primary">
      <input type="checkbox" id="remember">
      <label for="remember">Remember Me</label>
    </div>
  </div>
  <div class="col-4">
    <button type="submit" name="registro" class="btn btn-primary">Sign In</button>
  </div>
  <div class="col-12 mt-2 text-center">
  <a href="index.php?ruta=registro" class="btn btn-outline-primary">Nuevo registro</a>
  </div>
</div>

      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
<?php
  if(isset($_POST['registro'])){
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];

    $insertardatos ="INSERT INTO usuario VALUES('','$usuario', '$contraseña' )";

    $ejecutarInsertar=mysqli_query ($enlace,$insertardatos);  

  }
?>

