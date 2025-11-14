<?php
include 'conexion.php';

$paciente_id = $_GET['id'] ?? 0;
if (!$paciente_id || !is_numeric($paciente_id)) {
    die("Error: ID de paciente no válido.");
}

$sql = "SELECT * FROM pacientes WHERE id = $paciente_id";
$res = mysqli_query($enlace, $sql);
$paciente = mysqli_fetch_assoc($res);
if (!$paciente) {
    die("Paciente no encontrado.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Expediente de <?php echo htmlspecialchars($paciente['nombre'] . ' ' . $paciente['apellido']); ?></title>
  <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="Vistas/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <style>
    .btn-danger:hover i {
      color: #fff;
      transform: scale(1.2);
      transition: transform 0.2s ease-in-out;
    }
    /* Espacio entre icono y texto */
    .btn-danger.btn-sm i {
      margin-right: 6px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
  <div class="content-wrapper p-4">
    <div class="container">

      <h2 class="mb-4">Expediente de: <?php echo htmlspecialchars($paciente['nombre'] . ' ' . $paciente['apellido']); ?></h2>

      <!-- Card para formulario subir archivo -->
      <div class="card mb-4">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title mb-0">Subir nuevo documento (PDF/Word)</h5>
        </div>
        <div class="card-body">
          <form action="subirExpediente.php" method="POST" enctype="multipart/form-data" class="form-inline">
            <input type="hidden" name="paciente_id" value="<?php echo $paciente_id; ?>">
            <div class="form-group mr-3 mb-2">
              <input type="file" name="archivo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mb-2"><i class="fas fa-upload"></i> Subir</button>
          </form>
        </div>
      </div>

      <div class="card">
        <div class="card-header bg-info text-white">
          <h5 class="card-title mb-0">Documentos subidos</h5>
        </div>
        <div class="card-body">
          <?php
          $archivos = mysqli_query($enlace, "SELECT * FROM archivos_expediente WHERE paciente_id = $paciente_id ORDER BY fecha_subida DESC");
          if (mysqli_num_rows($archivos) > 0) {
              echo '<ul class="list-group">';
              while ($archivo = mysqli_fetch_assoc($archivos)) {
                  echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                  echo '<a href="' . htmlspecialchars($archivo['ruta_archivo']) . '" target="_blank">' . htmlspecialchars($archivo['nombre_archivo']) . '</a>';
                  echo '<a href="eliminarArchivo.php?id=' . $archivo['id'] . '&paciente_id=' . $paciente_id . '" class="btn btn-danger btn-sm" title="Eliminar archivo" onclick="return confirm(\'¿Eliminar este archivo?\')">';
                  echo '<i class="fas fa-trash"></i> Eliminar</a></li>';
              }
              echo '</ul>';
          } else {
              echo '<p>No hay archivos subidos aún.</p>';
          }
          ?>
        </div>
      </div>

      <a href="http://localhost:8080/MVC/administradorPsicologo" class="btn btn-secondary mt-4"><i class="fas fa-arrow-left"></i> Volver</a>
    </div>
  </div>
</div>

<script src="Vistas/plugins/jquery/jquery.min.js"></script>
<script src="Vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Vistas/dist/js/adminlte.min.js"></script>
</body>
</html>
