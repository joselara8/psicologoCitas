<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/adminlte.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <?php
  include "Vistas/modulos/cabecera.php";
  include "Vistas/modulos/menu.php";  
  if (isset($_GET["ruta"])){
    if ($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "Servicios"||
        $_GET["ruta"] == "loginClientes"||
        $_GET["ruta"] == "administradorPsicologo"||
        $_GET["ruta"] == "registro"||
        $_GET["ruta"] == "subirExpediente"||
        $_GET["ruta"] == "expedientes"||
        $_GET["ruta"] == "expediente"||
        $_GET["ruta"] == "contact"||
        $_GET["ruta"] == "reservacion"||
        $_GET["ruta"] == "inicio"
    ){
      include "modulos/".$_GET["ruta"].".php";
    }
    else {
      include "modulos/404.php";
    }
  }
  else 
  {
    include "Vistas/modulos/inicio.php";
  } 
 // include "Vistas/modulos/inicio.php";
 // include "Vistas/modulos/404.php";


  ?>
  <!-- Content Wrapper. Contains page content -->
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

</body>
</html>